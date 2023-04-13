<div class="sidebar-wrapper" data-simplebar="true">
			<div class="sidebar-header">
				<div>
					<img src="{{ asset ('../rukada/vertical/assets/images/logo-icon.png') }}" class="logo-icon" alt="logo icon">
				</div>
				<div>
					<h4 class="logo-text">Rukada</h4>
				</div>
				<div class="toggle-icon ms-auto"><i class='bx bx-arrow-to-left'></i>
				</div>
			</div>
			<!--navigation-->
			<ul class="metismenu" id="menu">
				<li class="{{ (request()->is('dashboard')) ? 'mm-active' : '' }}">
					<a href="/dashboard" >
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
				</li>

				<li class="menu-label">SI KPP</li>
				<li class="{{ (request()->is('kerjasama')) ? 'mm-active' : '' }}">
					<a href="{{ route('kerjasama.index') }}" >
						<div class="parent-icon"><i class="bx bx-folder"></i>
						</div>
						<div class="menu-title">Kerjasama</div>
					</a>
				</li>
				<li class="{{ (request()->is('user')) ? 'mm-active' : '' }}">
					<a href="{{ route('user.index') }}" >
						<div class="parent-icon"><i class="bx bx-folder"></i>
						</div>
						<div class="menu-title">Pengguna</div>
					</a>
				</li>
				<li class="{{ (request()->is('pen')) ? 'mm-active' : '' }}">
					<a href="{{ route('pen.index') }}" >
						<div class="parent-icon"><i class="bx bx-folder"></i>
						</div>
						<div class="menu-title">Penelitian</div>
					</a>
				</li>
				<li class="{{ (request()->is('peng')) ? 'mm-active' : '' }}">
					<a href="{{ route('peng.index') }}" >
						<div class="parent-icon"><i class="bx bx-folder"></i>
						</div>
						<div class="menu-title">Pengabdian</div>
					</a>
				</li>



				<li class="menu-label">Keluar Aplikasi</li>
				<li>
					<a href="#" >
						<div class="parent-icon"><i class="fadeIn animated bx bx-log-out"></i>
						</div>
						<div class="menu-title">Keluar</div>
					</a>
				</li>

				{{-- <li class="menu-label">Masuk Aplikasi</li>
				<li>
					<a href="#" >
						<div class="parent-icon"><i class="fadeIn animated bx bx-log-in"></i>
						</div>
						<div class="menu-title">Masuk</div>
					</a>
				</li> --}}
				{{-- <li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class='bx bx-home-circle'></i>
						</div>
						<div class="menu-title">Dashboard</div>
					</a>
					<ul>
						<li> <a href="index.html"><i class="bx bx-right-arrow-alt"></i>Default</a>
						</li>
						<li> <a href="dashboard-eCommerce.html"><i class="bx bx-right-arrow-alt"></i>eCommerce</a>
						</li>
						<li> <a href="dashboard-analytics.html"><i class="bx bx-right-arrow-alt"></i>Analytics</a>
						</li>
						<li> <a href="dashboard-digital-marketing.html"><i class="bx bx-right-arrow-alt"></i>Digital Marketing</a>
						</li>
						<li> <a href="dashboard-human-resources.html"><i class="bx bx-right-arrow-alt"></i>Human Resources</a>
						</li>
					</ul>
				</li>
				<li>
					<a href="javascript:;" class="has-arrow">
						<div class="parent-icon"><i class="bx bx-category"></i>
						</div>
						<div class="menu-title">Application</div>
					</a>
					<ul>
						<li> <a href="app-emailbox.html"><i class="bx bx-right-arrow-alt"></i>Email</a>
						</li>
						<li> <a href="app-chat-box.html"><i class="bx bx-right-arrow-alt"></i>Chat Box</a>
						</li>
						<li> <a href="app-file-manager.html"><i class="bx bx-right-arrow-alt"></i>File Manager</a>
						</li>
						<li> <a href="app-contact-list.html"><i class="bx bx-right-arrow-alt"></i>Contatcs</a>
						</li>
						<li> <a href="app-to-do.html"><i class="bx bx-right-arrow-alt"></i>Todo List</a>
						</li>
						<li> <a href="app-invoice.html"><i class="bx bx-right-arrow-alt"></i>Invoice</a>
						</li>
						<li> <a href="app-fullcalender.html"><i class="bx bx-right-arrow-alt"></i>Calendar</a>
						</li>
					</ul>
				</li>
				<li class="menu-label">Others</li>
				<li>
					<a class="has-arrow" href="javascript:;">
						<div class="parent-icon"><i class="bx bx-menu"></i>
						</div>
						<div class="menu-title">Menu Levels</div>
					</a>
					<ul>
						<li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level One</a>
							<ul>
								<li> <a class="has-arrow" href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level Two</a>
									<ul>
										<li> <a href="javascript:;"><i class="bx bx-right-arrow-alt"></i>Level Three</a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
					</ul>
				</li>
				<li>
					<a href="https://codervent.com/rukada/documentation/index.html" target="_blank">
						<div class="parent-icon"><i class="bx bx-folder"></i>
						</div>
						<div class="menu-title">Documentation</div>
					</a>
				</li>
				<li>
					<a href="https://themeforest.net/user/codervent" target="_blank">
						<div class="parent-icon"><i class="bx bx-support"></i>
						</div>
						<div class="menu-title">Support</div>
					</a>
				</li> --}}
			</ul>
			<!--end navigation-->
		</div>