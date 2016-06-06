<?php require('header.php'); ?>

<div class="heading heading--with-link">
	<h1>Баланс <span class="secondary-color">5000р</span></h1>
	<a href="balance.php" class="heading__link link--back">
		<svg class="icon"><use xlink:href="#arrow-right"/></svg>
		Отменить
	</a>
</div>
<div class="tile-block">
	<div class="tile-block__content">
		<div class="form-grid form-calc">
			<div class="field field--small">
				<label class="small">Контакты (от 30)</label>
				<input class="form-calc__operand" type="text" value="30" min="30" />
			</div>
			<div class="form-grid__block form-calc__text">
				x <span class="form-calc__operand">105</span> руб
				= <span class="calc__result">3150</span> руб
			</div>
		</div>
		<div class="form-grid form-grid--big-gutter form-calc">
			<div class="field">
				<label class="small">Способ оплаты</label>
				<div class="custom-select__wrapper">
					<select class="custom-select__select">
						<option selected value="visa-master">Visa, Mastercard</option>
						<option value="webmoney">Webmoney</option>
						<option value="qiwi">Qiwi Wallet</option>
						<option value="yandex">Yandex</option>
					</select>
					<!-- data-icons-path - путь к флагам от корня -->
					<div class="custom-select custom-select--with-icons" data-icons-path="images/payments/small-icons/" data-icons-format="png"></div>
				</div>
			</div>
			<div class="field">
				<label class="small">Комиссия платежной системы </label>
				<div class="form-calc__text form-grid__block">50 руб (2%)</div>
			</div>
		</div>
	</div>
	<div class="tile-block__foot">
		<div class="">
			<span class="big-text gray-text dark upper-text"><b>Итого: </b></span>
			<span class="large-text black-text"><b><span class="form-calc__total">3200</span> руб</b></span>
			<span class="small-text light-text">(комиссия платежной системы 2% включена)</span>
		</div>
		<button class="btn">Перейти к оплате</button>
	</div>
</div>

<?php require('footer.php'); ?>