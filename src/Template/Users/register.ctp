<h1 class="page-header">ユーザー登録</h1>
<?php
echo $this->Form->create($user);
echo $this->Form->input('name');
echo $this->Form->input('password');
echo $this->Form->button("register");
echo $this->Form->end();
?>