<?php
defined('_JEXEC') or die('Unauthorized Access');

function modChrome_no($module, &$params, &$attribs)
{
	if ($module->content)
	{
		echo $module->content;
	}
}

function modChrome_footer($module, &$params, &$attribs)
{
	echo '<div class="col-lg-3">';
	if ($module->content) {
		if ($module->showtitle)
		{
			echo '<div class="panel-heading"><b>' . $module->title . '</b></div>';
		}
		echo $module->content;
	}
	echo "</div>";
}

function modChrome_well($module, &$params, &$attribs)
{
	if ($module->content)
	{
		echo "<div class=\"well " . htmlspecialchars($params->get('moduleclass_sfx')) . "\">";
		if ($module->showtitle)
		{
			echo "<h3 class=\"page-header\">" . $module->title . "</h3>";
		}
		echo $module->content;
		echo "</div>";
	}
}


function modChrome_sidebar($module, &$params, &$attribs)
{
	if ($module->content)
	{	
		echo "<div class=\"card panel-default " . htmlspecialchars($params->get('moduleclass_sfx')) . "\">";
			echo "<div class=\"card-title " . htmlspecialchars($params->get('moduleclass_sfx')) . "\">";
			if ($module->showtitle)
			{
				echo "<h3>" . $module->title . "</h3>";
			}
			echo "</div>";

			echo "<div class=\"card-content " . htmlspecialchars($params->get('moduleclass_sfx')) . "\">";
				echo $module->content;
			echo "</div>";
		echo "</div>";
	}
}