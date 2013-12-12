<?php
function post_meta_who($post, $class)
		{
			if (isset($post['who']))
			{
				$this->output('<span class="' . $class . '-who">');
				if (strlen(@$post['who']['prefix'])) $this->output('<span class="' . $class . '-who-pad">' . $post['who']['prefix'] . '</span>');
				if (isset($post['who']['data'])) $this->output('<span class="' . $class . '-who-data">' . $post['who']['data'] . '</span>');
				if (isset($post['who']['title'])) $this->output('<span class="' . $class . '-who-title">' . $post['who']['title'] . '</span>');
				if (current_user_can('administrator'))
				{
					$this->output(" (مدیر کل سایت)");
				}
				elseif (current_user_can('subscriber'))
				{
					$this->output(" (کاربر معمولی)");
				}
				elseif (current_user_can('editor'))
				{
					$this->output(" (ناظم)");
				}
				elseif (current_user_can('contributor'))
				{
					$this->output(" (متخصص)");
				}
				else
				{
					$this->output(" (کاربر معمولی)");
				}
		
				if (isset($post['who']['points']))
				{
					$post['who']['points']['prefix'] = '(' . $post['who']['points']['prefix'];
					$post['who']['points']['suffix'].= ')';
					$this->output_split($post['who']['points'], $class . '-who-points');
				}
		
				if (strlen(@$post['who']['suffix'])) $this->output('<span class="' . $class . '-who-pad">' . $post['who']['suffix'] . '</span>');
				$this->output('</span>');
			}
		}
}
