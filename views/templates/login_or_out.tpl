<{extends file='./base/base.tpl'}>

<{block name='body'}>
<form action='/login.php' method='post'>
	用户名：<input value='' name='userName' type='text' /><br />
	密码：<input value='' name='password' type='password' /><br />
	<input value='登录' type='submit' />
</form>


<{/block}>
