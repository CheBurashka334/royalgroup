<?php require('header.php'); ?>

<div class="highlight-box">
	<h4>Получите статус специалиста до 22.02.2015</h4>
	<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod bibendum laoreet. Proin gravida dolor sit amet lacus accumsan et viverra justo commodo. Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Nam fermentum, nulla luctus.</p>
</div>
<h1>Рабочая тетрадь</h1>
<div class="tabs">
	<ul class="tabs__header">
		<!-- активна вкладка .tab--active, если нет .tab--active - первая -->
		<li class="tabs__item">
			<a href="#all" class="tabs__item-link">все <sup>14</sup></a>
		</li>
		<li class="tabs__item">
			<a href="#important" class="tabs__item-link">срочные <sup>2</sup></a>
		</li>
		<li class="tabs__item">
			<a href="#today" class="tabs__item-link">сегодня <sup>5</sup></a>
		</li>
		<li class="tabs__item">
			<a href="#black-list" class="tabs__item-link">черный список <sup>7</sup></a>
		</li>
	</ul>
	<div class="tabs__content" id="all">
		<div class="contects__list">
			<div class="tile-block contact tile-block--contact user user--online contact--need-action">
				<div class="tile-block__content">
					<div class="contact__top">
						<div class="user__info">
							<div class="user__pic">
								<img src="images/users/user-pic-2.png"/>
							</div>
							<div class="user__name">
								Ольга Фролова
								<span class="note small-text light-text">Тюмень, 14:00 (GMT+5)</span>
								<div class="user__status">
									<span class="notification">6</span>
									<span class="small-text">Подтверждение приобретения пакета и трафика, ожидает доступ к трафику</span>
								</div>
							</div>
						</div>
						<div class="contact__actions">
							<button class="btn btn-circle btn-circle--red"><svg class="icon"><use xlink:href="#lock"/></svg></button>
							<button class="btn btn-circle btn-circle--khaki"><svg class="icon"><use xlink:href="#chat"/></svg></button>
							<button class="btn btn-circle btn-circle--yellow"><svg class="icon"><use xlink:href="#mic"/></svg></button>
						</div>
					</div>
					<div class="contact__bottom">
						<div class="user__contacts-list user__contacts-list--gorizontal">
							<a href="#" class="user__contact">
								<span class="icon icon-skype"></span>
								kostya
							</a>
							<a href="#" class="user__contact">
								<span class="icon icon-mobile-phone"></span>
								+7 234 4567890
							</a>
							<a href="#" class="user__contact">
								<span class="icon icon-email"></span>
								konstdolgopolsky@gmail.com
							</a>
						</div>
						<div class="contact__actions">
							<button class="btn-flat btn--block">
								<span class="icon icon-cross icon--o"></span>
								Заблокировать
							</button>
							<button class="btn-flat btn--add-note">
								<span class="icon icon-pencil"></span>
								Добавить заметку
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="tile-block contact tile-block--contact user">
				<div class="tile-block__content">
					<div class="contact__top">
						<div class="user__info">
							<div class="user__pic">
								<img src="images/users/user-pic-3.png"/>
							</div>
							<div class="user__name">
								Оксана Сомова
								<span class="note small-text light-text">Комсомольск-на-Амуре, 14:00 (GMT+5)</span>
								<div class="user__status">
									<span class="notification">5</span>
									<span class="small-text">Обучение</span>
								</div>
							</div>
						</div>
						<div class="contact__actions">
							<button class="btn btn-circle btn-circle--khaki"><svg class="icon"><use xlink:href="#chat"/></svg></button>
							<button class="btn btn-circle btn-circle--yellow"><svg class="icon"><use xlink:href="#mic"/></svg></button>
						</div>
					</div>
					<div class="contact__bottom">
						<div class="user__contacts-list user__contacts-list--gorizontal">
							<a href="#" class="user__contact">
								<span class="icon icon-skype"></span>
								somova
							</a>
							<a href="#" class="user__contact">
								<span class="icon icon-mobile-phone"></span>
								+7 234 4567890
							</a>
							<a href="#" class="user__contact">
								<span class="icon icon-email"></span>
								somova@gmail.com
							</a>
						</div>
						<div class="contact__actions">
							<button class="btn-flat btn--block">
								<span class="icon icon-cross icon--o"></span>
								Заблокировать
							</button>
							<button class="btn-flat btn--add-note">
								<span class="icon icon-pencil"></span>
								Добавить заметку
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="tile-block contact tile-block--contact user user--online">
				<div class="tile-block__content">
					<div class="contact__top">
						<div class="user__info">
							<div class="user__pic">
								<img src="images/users/user-pic-4.png"/>
							</div>
							<div class="user__name">
								Фридрих Шварценгольд
								<span class="note small-text light-text">Екатеринбург, 14:00 (GMT+5)</span>
								<div class="user__status">
									<span class="notification">5</span>
									<span class="small-text">Обучение</span>
								</div>
							</div>
						</div>
						<div class="contact__actions">
							<button class="btn btn-circle btn-circle--khaki"><svg class="icon"><use xlink:href="#chat"/></svg></button>
							<button class="btn btn-circle btn-circle--yellow"><svg class="icon"><use xlink:href="#mic"/></svg></button>
						</div>
					</div>
					<div class="contact__bottom">
						<div class="user__contacts-list user__contacts-list--gorizontal">
							<a href="#" class="user__contact">
								<span class="icon icon-mobile-phone"></span>
								+7 234 4567890
							</a>
							<a href="#" class="user__contact">
								<span class="icon icon-email"></span>
								konstdolgopolsky@gmail.com
							</a>
						</div>
						<div class="contact__actions">
							<button class="btn-flat btn--block">
								<span class="icon icon-cross icon--o"></span>
								Заблокировать
							</button>
							<button class="btn-flat btn--add-note btn--has-note">
								<span class="icon icon-bell icon--circle"></span>
								Нужно связаться в кон...
							</button>
						</div>
					</div>
				</div>
			</div>
			<div class="tile-block contact tile-block--contact user user--online contact--blocked">
				<div class="tile-block__content">
					<div class="contact__top">
						<div class="user__info">
							<div class="user__pic">
								<img src="images/users/user-pic-1.png"/>
							</div>
							<div class="user__name">
								Константин Севастопольский 
								<span class="note small-text light-text">Тюмень, 14:00 (GMT+5)</span>
								<div class="user__status">
									<span class="notification">6</span>
									<span class="small-text">Обучение</span>
								</div>
							</div>
						</div>
						<div class="contact__actions">
							<button class="btn btn-circle btn-circle--khaki"><svg class="icon"><use xlink:href="#chat"/></svg></button>
							<button class="btn btn-circle btn-circle--yellow"><svg class="icon"><use xlink:href="#mic"/></svg></button>
						</div>
					</div>
					<div class="contact__bottom">
						<div class="user__contacts-list user__contacts-list--gorizontal">
							<a href="#" class="user__contact">
								<span class="icon icon-skype"></span>
								kostya
							</a>
							<a href="#" class="user__contact">
								<span class="icon icon-mobile-phone"></span>
								+7 234 4567890
							</a>
						</div>
						<div class="contact__actions">
							<button class="btn-flat btn--block">
								<span class="icon icon-cross icon--circle"></span>
								Разблокировать
							</button>
							<button class="btn-flat btn--add-note">
								<span class="icon icon-pencil"></span>
								Добавить заметку
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="tabs__content" id="important">
		content here...
	</div>
	<div class="tabs__content" id="today">
		content here...
	</div>
	<div class="tabs__content" id="black-list">
		content here...
	</div>
</div>
<?php require('footer.php'); ?>