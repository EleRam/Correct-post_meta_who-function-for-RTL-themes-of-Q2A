function post_meta_who($post, $class)
{
	if (isset($post['who']))
	{
		$this->output('<span class="' . $class . '-who">');
		if (strlen(@$post['who']['prefix'])) $this->output('<span class="' . $class . '-who-pad">' . $post['who']['prefix'] . '</span>');
		if (isset($post['who']['data'])) $this->output('<span class="' . $class . '-who-data">' . $post['who']['data'] . '</span>');
		if (isset($post['who']['title'])) $this->output('<span class="' . $class . '-who-title">' . $post['who']['title'] . '</span>');
		if (isset($post['who']['level']) && ($post['who']['level'] == 'مدیریت اصلی')) $this->output(" (مدیر کل سایت)");
		if (isset($post['who']['level']) && ($post['who']['level'] == 'کاربر ثبت نام شده')) $this->output(" (کاربر معمولی)");
		if (isset($post['who']['level']) && ($post['who']['level'] == 'مدیریت کل')) $this->output(" (مدیر)");
		if (isset($post['who']['level']) && ($post['who']['level'] == 'ناظم')) $this->output(" (ناظم)");
		if (isset($post['who']['level']) && ($post['who']['level'] == 'متخصص')) $this->output(" (متخصص)");
		if (isset($post['who']['level']) && ($post['who']['level'] == 'ادیت')) $this->output(" (ویرایشگر)");
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
