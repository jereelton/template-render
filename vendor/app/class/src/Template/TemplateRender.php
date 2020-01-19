<?php 

/**
 * Author: Jereelto Teixeira (JOTICODE)
 * Description: Class for handler template files HTML
 * Date: 18/01/2020
 * Details: License GPL 3.0
 */

namespace App\Template;

use \Rain\Tpl;

class TemplateRender
{
	private $tpl       = null;
	private $error     = 0;
	private $settings  = array();
	private $params    = array();
	private $data      = array();
	/**
	 * HTML5 Structure *
	 */
	private $templates = [
		"header"  => true,
		"main"    => true,
		"section" => false,
		"article" => false,
		"aside"   => false,
		"footer"  => true,
		"others"  => false
	];

	/**
	 * opts[]: options for run template
	 * data[]: data for use in any template
	 * dir[]: directory where view files are available
	 */
	public function __construct($opts = [], $data = [], $dir = [])
	{
		$this->settings = array_merge($this->settings, $opts);
		$this->data     = array_merge($this->data, $data);
		$this->params   = array(
			"tpl_dir"   => $dir["tpl_dir"],
			"cache_dir" => $dir["cache_dir"],
			"debug"     => false
		);
	}

	private function templateAnalyze()
	{
		foreach($this->templates as $key => $value)
		{
			if(
				$key != "others" &&
				isset($this->settings[$key]) && 
				$this->settings[$key] === true || 
				$this->templates[$key] === true
			)
			{
				$file = $this->params["tpl_dir"].$key.".tpl.html";
				if(!file_exists($file))
				{
					throw new \Exception("File ".$file." not found !", 1);
					return false;
				}
			}
		}

		return true;
	}

	public function templatePrepare($data = [])
	{
		try
		{
			if(!$this->templateAnalyze()) {
				throw new \Exception("Critical Error in Process: templateAnalyze");
			}
		}
		catch(\Exception $err)
		{
			die("[ABORT] ".$err->getMessage()." !");
		}

		$this->tpl = new Tpl;
		$this->tpl->configure($this->params);

		if(count($data) > 0) {
			$this->data = array_merge($this->data, $data);
			$this->templateBindParms();
		}

		return $this;
	}

	public function templateRender($templates)
	{
		foreach ($templates as $key => $value)
		{
			if(isset($this->settings[$value]) && $this->settings[$value] === true)
			{
				$render = "{$value}Render";
				$this->$render();
			} else {
				$this->othersRender($value);
			}
		}

		return $this;
	}

	private function templateBindParms()
	{
		foreach($this->data as $key => $value)
		{
			$this->tpl->assign($key, $value);
		}
		return $this;
	}

	private function othersRender($arg = "")
	{
		$this->tpl->draw($arg.".tpl");
		return $this;
	}

	private function headerRender()
	{
		$this->tpl->draw("header.tpl");
		return $this;
	}

	private function mainRender()
	{
		$this->tpl->draw("main.tpl");
		return $this;
	}

	private function sectionRender()
	{
		$this->tpl->draw("section.tpl");
		return $this;
	}

	private function articleRender()
	{
		$this->tpl->draw("article.tpl");
		return $this;
	}

	private function asideRender()
	{
		$this->tpl->draw("aside.tpl");
		return $this;
	}

	private function footerRender()
	{
		$this->tpl->draw("footer.tpl");
		return $this;
	}

	public function setTpl($name, $data = array(), $returnHTML = false)
	{
		$this->setData($data);

		return $this->tpl->draw($name, $returnHTML);
	}

	private function setData($data = array())
	{
		foreach($data as $key => $value)
		{
			$this->tpl->assign($key, $value);
		}
	}

	public function __destruct()
	{
		//if($this->settings["footer"] === true) $this->tpl->draw("footer.tpl");

		/**
		 * Destroy All Settings
		 * 
		 */
	}

}

?>