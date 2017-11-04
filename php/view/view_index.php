<?php

class View_index
{
	public function view_themes($themes)
	{		
		foreach($themes as $theme)
		{	
			echo "<a href='http://magazin/articles/view/".$theme['name']."'>".$theme['name']."<a><br><br>";
		}
	}
}