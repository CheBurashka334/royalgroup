<?php require('header.php'); ?>
<div class="page-content">

<h1>Введите код подтверждения</h1>
<div class="tile-block tile-block--small center">
	<div class="tile-block__form">
		<p>На номер +7 584 8549624 был выслан код подтверждения. </br>
		тобы продолжить, введите код в поле ниже.</p>
		<div class="form-grid">
			<div class="field">
				<label>Код подтверждения (4 цифры)</label>
				<input type="text" />
				<span class="error-text">Введите еще 3 цифры</span>
			</div>
			<input type="submit" value="Продолжить" class="btn btn--small" />
		</div>
		<div class="tile-block__form-actions">
			<a href="#">Получить код повторно</a>
			<a href="#">Указать другой номер  телефона</a>
		</div>
	</div>
</div>

<?php require('footer.php'); ?>