<!-- loder -->
<div class="loader-wrapper">
		<div class="loader"></div>
		<div class="loder-section left-section"></div>
		<div class="loder-section right-section"></div>
	</div>  


	<div id="sticky-header" class="wedding_nav_manu">
		<div class="container">
			<div class="row btm-bg align-items-center">	
				<div class="col-lg-7 pl-0 pr-0">
					<nav class="wedding_menu">
						<ul class="nav_scroll">
							<li><a href="/">Index <span></span></a>
								
							</li>
							
							</li>
							<li><a href="#">Blog <span><i class="fas fa-angle-down"></i></span></a>
								<ul class="sub-menu">
								
									<li><a href="{{ route('books.index') }}">Blog List</a></li>
								
								</ul>
							</li>
							
						</ul>
						<div class="logo">
							
						</div>
						<ul class="nav_scroll">
							<li><a href="{{ route('admin.login') }}">Backend panel <span></span></a>
								
							</li>
							
							</li>
							
							
						</ul>
					</nav>
				</div>
				<div class="col-lg-3" style='display:flex;'>
                    @guest
                        <!-- 未登录时显示 登录 和 注册 按钮 -->
                        <div class="header-button">
                            <a href="{{ route('login.create') }}">Login</a>
                        </div>

                        <div class="header-button" style='margin-left:10px;'>
                            <a href="{{ route('register.create') }}">Register</a>
                        </div>
                    @endguest
                
               
                    <nav class="wedding_menu">
                        @auth
                        <!-- 登录后显示用户名和下拉菜单 -->
                        <ul class="nav_scroll">
                        <li><a href="#">{{ Auth::user()->username }}<span><i class="fas fa-angle-down"></i></span></a>
                            <ul class="sub-menu">
                                <li><a href="{{ route('home') }}">Home</a></li>
                                <li><a href="{{ route('comments.index') }}">My Comments</a></li>
                                <li style='text-align:center;'>
                                    <form action="{{ route('logout') }}" method="POST">
                                        @csrf
                                        <button type="submit" style="background: none; border: none; padding: 0; color: inherit; font: inherit; cursor: pointer;">
                                            Sign Out
                                        </button>
                                    </form>
                                </li>  
                            </ul>
                        </li>
                        
                        
                        @endauth
                    </nav>  
                 </div>
             
			</div>
		</div>
	</div>