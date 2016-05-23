<?php require('header.php'); ?>

<h1>Количество мест</h1>
<div class="content-places">
	<ul class="places-list">
		<li></li>
		<li></li>
		<li></li>
	</ul>
</div>

<h1>Баланс <span class="secondary-color">5000р</span></h1>
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