<!DOCTYPE html>
<html lang="en" dir="rtl">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Mail Function</title>
	<link rel="stylesheet" href="themes/css/bootstrap.rtl.min.css">
	<link rel="stylesheet" href="themes/css/style.css">
	<script src="themes/js/jquery.min.js"></script>
</head>
<body>
	<form action="" method="post" autocomplete="on" class="w-100 m-auto"  id="form">
		<div class="alert alert-secondary text-center">فرم تماس با ما</div>	
		<!-- <br> -->
		<div class="form-floating mb-3">
			<input maxlength="50" dir="rtl" autofocus required type="text" class="form-control" name="name" id="name" placeholder="Full name">
			<label for="name">نام کامل شما</label>
		</div>
		<div class="form-floating mb-3">
			<input maxlength="50" required type="text" class="form-control" name="email" id="email" placeholder="Email">
			<label for="email">نشانی ایمیل شما</label>
		</div>
		<div class="form-floating mb-3">
			<input id="subject" name="subject" placeholder="subject" class="form-control" required>
			<label for="message">موضوع</label>
		</div>
		<div class="form-floating mb-3">
			<textarea id="message" name="message" placeholder="Your message" class="form-control" required></textarea>
			<label for="message">پیغام شما</label>
		</div>
		<button class="btn btn-primary w-100 py-2" type="submit" name="send">ارسال</button>
		<div id="result"></div>
	</form>

	<script>
		$('#form').submit(function(e) {
			e.preventDefault();
			const info = {
				name: $('#name').val(),
				email: $('#email').val(),
				subject: $('#subject').val(),
				message: $('#message').val()
			}

			$.ajax({
				url: 'send_mail.php',
				type: 'POST',
				data: info,
				success: function (res) {
					$('#result').html(`
						<br>
						<div class='alert alert-success text-center'>پیغام ارسال شد.</div>
					`);
				},
				error: function (res) {
					$('#result').html(`
						<br>
						<div class='alert alert-danger text-center'>ارسال پیغام با مشکل مواجه شد...</div>
					`);
				}
			});
		});
	</script>
</body>
</html>