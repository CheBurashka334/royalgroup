<?php require('header.php'); ?>

<div class="tile-block tile-block--small">
	<div class="tile-block__form">
		<p>На номер +7 584 8549624 был выслан код подтверждения. </br>
		тобы продолжить, введите код в поле ниже.</p>
		<div class="form-grid">
			<div class="field">
				<label>Код подтверждения (4 цифры)</label>
				<input type="text" />
			</div>
			<input type="submit" value="Продолжить" class="btn btn--small" />
		</div>
		<div class="tile-block__form-actions">
			<a href="#">Получить код повторно</a>
			<a href="#">Указать другой номер  телефона</a>
		</div>
	</div>
</div>
<div class="tile-block tile-block--small">
	<div class="tile-block__form">
		<div class="form-grid">
			<div class="field">
				<label>Имя</label>
				<input type="text" />
			</div>
			<div class="field">
				<label>Фамилия</label>
				<input type="text" />
			</div>
			<input type="submit" value="Продолжить" class="btn btn--small" />
		</div>
	</div>
</div>
<div class="tile-block">
	<div class="tile-block__form">
		<div class="form-grid">
			<div class="field">
				<label>Страна</label>
				<div class="custom-select__wrapper">
					<select class="custom-select__select">
						<option selected value="ru">Россия</option>
						<option value="kz">Казахстан</option>
						<option value="ua">Украина</option>
						<option value="pl">Польша</option>
						<option value="fi">Финляндия</option>
					</select>
					<!-- data-icons-path - путь к флагам от корня,
						 data-icons-format - формат иконок, если не указан - png -->
					<div class="custom-select custom-select--with-icons" data-icons-path="images/countries/"></div>
				</div>
			</div>
			<div class="field">
				<label>Номер мобильного</label>
				<input type="tel" placeholder="+7" />
			</div>
			<input type="submit" value="Продолжить" class="btn btn--small" />
		</div>
	</div>
</div>

<?php require('footer.php'); ?>