<?php require('header.php'); ?>
<?php require('sidebar.php'); ?>
<div class="page-content">

<h1>Транзакции</h1>
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
				<div class="transaction-table--collapsible">
					<div class="transaction-table__head">
						<div class="transaction-table__col transaction-table__col--name">
							Имя
						</div>
						<div class="transaction-table__col transaction-table__col--last">
							Последняя транзакция
						</div>
						<div class="transaction-table__col transaction-table__col--source">
							Источник
						</div>
						<div class="transaction-table__col transaction-table__col--balance">
							Баланс
						</div>
					</div>
					<div class="transaction-table__body">
						<div class="transaction-table__row ui-accordion">
							<div class="ui-accordion-header">
								<div class="transaction-table__col transaction-table__col--name">
									<span class="user">Ольга Фролова
								</div>
								<div class="transaction-table__col transaction-table__col--last">
									24.12.2015 <span class="plus">+500 р</span>
								</div>
								<div class="transaction-table__col transaction-table__col--source">
									Visa 2345 0298 7642 1234
								</div>
								<div class="transaction-table__col transaction-table__col--balance">
									5000 р
								</div>
							</div>
							<div class="ui-accordion-content">
								<div class="title">Транзакции</div>
								<div class="transaction-subtable">
									<div class="transaction-subtable__row">
										<div class="transaction-subtable__col transaction-subtable__col--date">
											24.12.2015  15:00
										</div>
										<div class="transaction-subtable__col transaction-subtable__col--sum">
											<span class="plus">+7 000 р</span>
										</div>
										<div class="transaction-subtable__col transaction-subtable__col--source">
											Visa 2345 0298 7642 1234
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="transaction-table__row ui-accordion">
							<div class="ui-accordion-header">
								<div class="transaction-table__col transaction-table__col--name">
									Константин Павленко
								</div>
								<div class="transaction-table__col transaction-table__col--last">
									24.12.2015 <span class="minus">-1000 р</span>
								</div>
								<div class="transaction-table__col transaction-table__col--source">
									Оплата трафика - декабрь 2015
								</div>
								<div class="transaction-table__col transaction-table__col--balance">
									0 р
								</div>
							</div>
							<div class="ui-accordion-content">
								<div class="title">Транзакции</div>
								<div class="transaction-subtable">
									<div class="transaction-subtable__row">
										<div class="transaction-subtable__col transaction-subtable__col--date">
											24.12.2015  15:00
										</div>
										<div class="transaction-subtable__col transaction-subtable__col--sum">
											<span class="minus">-1000 р</span>
										</div>
										<div class="transaction-subtable__col transaction-subtable__col--source">
											Visa 2345 0298 7642 1234
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="transaction-table__row ui-accordion">
							<div class="ui-accordion-header">
								<div class="transaction-table__col transaction-table__col--name">
									<span class="user user--online">Константин Константинопольский</span>
								</div>
								<div class="transaction-table__col transaction-table__col--last">
									24.12.2015 <span class="plus">+7 000 р</span>
								</div>
								<div class="transaction-table__col transaction-table__col--source">
									Visa 2345 0298 7642 1234
								</div>
								<div class="transaction-table__col transaction-table__col--balance">
									5000 р
								</div>
							</div>
							<div class="ui-accordion-content">
								<div class="title">Транзакции</div>
								<div class="transaction-subtable">
									<div class="transaction-subtable__row">
										<div class="transaction-subtable__col transaction-subtable__col--date">
											24.12.2015  15:00
										</div>
										<div class="transaction-subtable__col transaction-subtable__col--sum">
											<span class="plus">+1 000 р</span>
										</div>
										<div class="transaction-subtable__col transaction-subtable__col--source">
											Visa 2345 0298 7642 1234
										</div>
									</div>
									<div class="transaction-subtable__row">
										<div class="transaction-subtable__col transaction-subtable__col--date">
											24.12.2015  15:00
										</div>
										<div class="transaction-subtable__col transaction-subtable__col--sum">
											<span class="plus">+2 000 р</span>
										</div>
										<div class="transaction-subtable__col transaction-subtable__col--source">
											Visa 2345 0298 7642 1234
										</div>
									</div>
									<div class="transaction-subtable__row">
										<div class="transaction-subtable__col transaction-subtable__col--date">
											24.12.2015  15:00
										</div>
										<div class="transaction-subtable__col transaction-subtable__col--sum">
											<span class="plus">+4 000 р</span>
										</div>
										<div class="transaction-subtable__col transaction-subtable__col--source">
											Visa 2345 0298 7642 1234
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="transaction-table__row ui-accordion">
							<div class="ui-accordion-header">
								<div class="transaction-table__col transaction-table__col--name">
									<span class="user user--online">Ольга Фролова</span>
								</div>
								<div class="transaction-table__col transaction-table__col--last">
									24.12.2015 <span class="plus">+500 р</span>
								</div>
								<div class="transaction-table__col transaction-table__col--source">
									Visa 2345 0298 7642 1234
								</div>
								<div class="transaction-table__col transaction-table__col--balance">
									5000 р
								</div>
							</div>
							<div class="ui-accordion-content">
								<div class="title">Транзакции</div>
								<div class="transaction-subtable">
									<div class="transaction-subtable__row">
										<div class="transaction-subtable__col transaction-subtable__col--date">
											24.12.2015  15:00
										</div>
										<div class="transaction-subtable__col transaction-subtable__col--sum">
											<span class="plus">+7 000 р</span>
										</div>
										<div class="transaction-subtable__col transaction-subtable__col--source">
											Visa 2345 0298 7642 1234
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="transaction-table__row ui-accordion">
							<div class="ui-accordion-header">
								<div class="transaction-table__col transaction-table__col--name">
									<span class="user user--online">Ольга Фролова</span>
								</div>
								<div class="transaction-table__col transaction-table__col--last">
									24.12.2015 <span class="plus">+500 р</span>
								</div>
								<div class="transaction-table__col transaction-table__col--source">
									Visa 2345 0298 7642 1234
								</div>
								<div class="transaction-table__col transaction-table__col--balance">
									5000 р
								</div>
							</div>
							<div class="ui-accordion-content">
								<div class="title">Транзакции</div>
								<div class="transaction-subtable">
									<div class="transaction-subtable__row">
										<div class="transaction-subtable__col transaction-subtable__col--date">
											24.12.2015  15:00
										</div>
										<div class="transaction-subtable__col transaction-subtable__col--sum">
											<span class="plus">+7 000 р</span>
										</div>
										<div class="transaction-subtable__col transaction-subtable__col--source">
											Visa 2345 0298 7642 1234
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="transaction-table__row ui-accordion">
							<div class="ui-accordion-header">
								<div class="transaction-table__col transaction-table__col--name">
									<span class="user">Ольга Фролова</span>
								</div>
								<div class="transaction-table__col transaction-table__col--last">
									24.12.2015 <span class="plus">+500 р</span>
								</div>
								<div class="transaction-table__col transaction-table__col--source">
									Visa 2345 0298 7642 1234
								</div>
								<div class="transaction-table__col transaction-table__col--balance">
									5000 р
								</div>
							</div>
							<div class="ui-accordion-content">
								<div class="title">Транзакции</div>
								<div class="transaction-subtable">
									<div class="transaction-subtable__row">
										<div class="transaction-subtable__col transaction-subtable__col--date">
											24.12.2015  15:00
										</div>
										<div class="transaction-subtable__col transaction-subtable__col--sum">
											<span class="plus">+7 000 р</span>
										</div>
										<div class="transaction-subtable__col transaction-subtable__col--source">
											Visa 2345 0298 7642 1234
										</div>
									</div>
								</div>
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