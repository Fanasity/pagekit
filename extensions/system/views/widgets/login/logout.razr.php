@trans('Hi') @user.username<br>
<a href="@url.route('@system/auth/logout', redirect ? ['redirect' => redirect] : [])">@trans('Logout')</a>