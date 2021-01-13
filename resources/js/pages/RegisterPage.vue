<template>
    <!-- begin register -->
	<div class="register register-with-news-feed">
		<!-- begin news-feed -->
		<div class="news-feed">
			<div class="news-image" style="background-image: url(/color/assets/img/login-bg/login-bg-15.jpg)"></div>
			<div class="news-caption">
				<h4 class="caption-title"><b>Color</b> Admin App</h4>
				<p>
					As a Color Admin app administrator, you use the Color Admin console to manage your organization’s account, such as add new users, manage security settings, and turn on the services you want your team to access.
				</p>
			</div>
		</div>
		<!-- end news-feed -->
		<!-- begin right-content -->
		<div class="right-content">
			<!-- begin register-header -->
			<h1 class="register-header">
				회원가입
				<small>계정을 만들려면 밑의 내용을 채워주세요.</small>
			</h1>
			<!-- end register-header -->
			<!-- begin register-content -->
			<div class="register-content">
				<form action="index.html" method="GET" class="margin-bottom-0">
					<label class="control-label">이름 <span class="text-danger">*</span></label>
					<div class="row m-b-15">
						<div class="col-md-12">
							<input type="text" class="form-control" placeholder="이름" required />
						</div>
					</div>
					<label class="control-label">이메일 주소 <span class="text-danger">*</span></label>
					<div class="row m-b-15">
						<div class="col-md-12">
							<input type="text" class="form-control" placeholder="이메일 주소" required />
						</div>
					</div>
					<label class="control-label">이메일 주소 확인 <span class="text-danger">*</span></label>
					<div class="row m-b-15">
						<div class="col-md-12">
							<input type="text" class="form-control" placeholder="이메일 주소 확인" required />
						</div>
					</div>
					<label class="control-label">비밀번호 <span class="text-danger">*</span></label>
					<div class="row m-b-15">
						<div class="col-md-12">
							<input type="password" class="form-control" placeholder="비밀번호" required />
						</div>
					</div>
					<div class="checkbox checkbox-css m-b-30">
						<div class="checkbox checkbox-css m-b-30">
							<input type="checkbox" id="agreement_checkbox" value="">
							<label for="agreement_checkbox">
							귀하는 당사의 쿠키사용을 포함한 개인정보를 수집하는데 동의하시겠습니까?
							</label>
						</div>
					</div>
					<div class="register-buttons">
						<button type="submit" class="btn btn-primary btn-block btn-lg">Sign Up</button>
					</div>
					<div class="m-t-30 m-b-30 p-b-30">
						이미 회원입니까? <router-link :to="{ name: 'login' }">로그인</router-link> 하세요.
					</div>
					<hr />
					<p class="text-center mb-0">
						&copy; Color Admin All Right Reserved 2020
					</p>
				</form>
			</div>
			<!-- end register-content -->
		</div>
		<!-- end right-content -->
	</div>
	<!-- end register -->
</template>
