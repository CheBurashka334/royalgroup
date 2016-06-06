<?php require('header.php'); ?>

<h1>Количество мест</h1>
<div class="content-places">
	<input type="hidden" class="content-places__input" value="1"/>
	<ul class="content-places__list">
		<li class="content-places__item content-places__item--active"></li>
		<li class="content-places__item"></li>
		<li class="content-places__item"></li>
		<li class="content-places__item"></li>
		<li class="content-places__item"></li>
		<li class="content-places__item"></li>
		<li class="content-places__item"></li>
		<li class="content-places__item"></li>
		<li class="content-places__item"></li>
		<li class="content-places__item content-places__item--disable"></li>
		<li class="content-places__item content-places__item--disable"></li>
		<li class="content-places__item content-places__item--disable"></li>
	</ul>
</div>
<div class="heading heading--with-link">
	<h1>Баланс <span class="secondary-color">5000р</span></h1>
	<a href="add-balance.php" class="heading__link">Пополнить баланс</a>
</div>
<div class="tabs">
	<ul class="tabs__header">
		<!-- активна вкладка .tab--active, если нет .tab--active - первая -->
		<li class="tabs__item">
			<a href="#all" class="tabs__item-link">все</a>
		</li>
		<li class="tabs__item">
			<a href="#today" class="tabs__item-link">сегодня</a>
		</li>
		<li class="tabs__item">
			<a href="#week" class="tabs__item-link">неделя</a>
		</li>
		<li class="tabs__item">
			<a href="#month" class="tabs__item-link">месяц</a>
		</li>
		<li class="tabs__item">
			<a href="#year" class="tabs__item-link">год</a>
		</li>
		<li class="tabs__item tabs__item--date">
			<div class="datepicker__wrapper">
				<!-- value хз какое значение должно быть по умолчанию -->
				<input type="text" class="datepicker" data-pmu-mode="range" data-pmu-position="bottom" value="31.05.2016 - 31.05.2016" />
				<svg class="datepicker__icon"><use xlink:href="#calendar"/></svg>
			</div>
		</li>
	</ul>
	<div class="tabs__content" id="all">
		<div class="tile-block">
			<div class="tile-block__table">
				<div class="transaction-table">
					<div class="transaction-table__head">
						<div class="transaction-table__col transaction-table__col--date">
							Дата
						</div>
						<div class="transaction-table__col transaction-table__col--sum">
							Сумма
						</div>
						<div class="transaction-table__col transaction-table__col--source">
							Источник
						</div>
						<div class="transaction-table__col transaction-table__col--balance">
							Баланс
						</div>
					</div>
					<div class="transaction-table__body">
						<div class="transaction-table__row">
							<div class="transaction-table__col transaction-table__col--date">
								24.12.2015  15:00
							</div>
							<div class="transaction-table__col transaction-table__col--sum">
								<span class="plus">+500 р</span>
							</div>
							<div class="transaction-table__col transaction-table__col--source">
								Visa 2345 0298 7642 1234
							</div>
							<div class="transaction-table__col transaction-table__col--balance">
								5000 р
							</div>
						</div>
						<div class="transaction-table__row">
							<div class="transaction-table__col transaction-table__col--date">
								21.12.2015  15:00
							</div>
							<div class="transaction-table__col transaction-table__col--sum">
								<span class="minus">-1000 р</span>
							</div>
							<div class="transaction-table__col transaction-table__col--source">
								Оплата трафика - декабрь 2015
							</div>
							<div class="transaction-table__col transaction-table__col--balance">
								7000 р
							</div>
						</div>
						<div class="transaction-table__row">
							<div class="transaction-table__col transaction-table__col--date">
								20.12.2015  11:00
							</div>
							<div class="transaction-table__col transaction-table__col--sum">
								<span class="plus">+7000 р</span>
							</div>
							<div class="transaction-table__col transaction-table__col--source">
								Яндекс-кошелек № 123456789
							</div>
							<div class="transaction-table__col transaction-table__col--balance">
								8000 р
							</div>
						</div>
						<div class="transaction-table__row">
							<div class="transaction-table__col transaction-table__col--date">
								20.12.2015  08:00
							</div>
							<div class="transaction-table__col transaction-table__col--sum">
								<span class="plus">+1000 р</span>
							</div>
							<div class="transaction-table__col transaction-table__col--source">
								Visa 2345 0298 7642 1234
							</div>
							<div class="transaction-table__col transaction-table__col--balance">
								1000 р
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tabs__content" id="today">
		content here...
	</div>
	<div class="tabs__content" id="week">
		content here...
	</div>
	<div class="tabs__content" id="month">
		content here...
	</div>
	<div class="tabs__content" id="year">
		content here...
	</div>
</div>

<?php require('footer.php'); ?>