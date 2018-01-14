<?php


class View
{
	public function generate($contentView,$data=[],$templateView='template_view.php')
	{
		include 'application/views/'.$templateView;

	}
}