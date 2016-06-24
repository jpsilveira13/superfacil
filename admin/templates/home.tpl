<script language="javascript" type="text/javascript">//<![CDATA[
if (typeof lang == 'undefined') { lang = {}; }
lang.ConfirmCancel = "{% lang 'ConfirmCancel' %}";
//]]></script>
<div style="margin-top: 0; margin: 10pt">
	<div style="{{ HideGettingStarted|raw }}" class="DashboardGettingStarted">
		{{ GettingStarted|raw }}
	</div>
	<div style="{{ HideOverview|raw }}" class="DashboardCommonTasks">
		{{ Messages|raw }}
		<div class="DashboardRightColumn">
			<div class="DashboardPanel DashboardPanelCurrentNotifications" style="{{ HideNotificationsList|raw }}">
				<div class="DashboardPanelContent">
					<h3><span class="icon"><i class="fa fa-tasks"></i></i></span> Notificações</h3>
					<div class="PanelSpace">
						<ul>
							{{ NotificationsList|raw }}
						</ul>
					</div>
				</div>
			</div>

			<div class="DashboardPanel DashboardPanelPerformanceIndicators" id="DashboardPanelPerformanceIndicators" style="{{ HideDashboardPerformanceIndcators|raw }}">
				<div class="DashboardPanelContent">
					<div class="DashboardPerformanceIndicatorsPeriodButton">
						<span class="Buttons">
							<a href="#" class="{{ PerformanceIndicatorsActiveDay|raw }} buton" rel="period=day">{% lang 'Day' %}</a>
							<a href="#" class="{{ PerformanceIndicatorsActiveWeek|raw }} buton" rel="period=week">{% lang 'Week' %}</a>
							<a href="#" class="{{ PerformanceIndicatorsActiveMonth|raw }} buton" rel="period=month">{% lang 'Month' %}</a>
							<a href="#" class="{{ PerformanceIndicatorsActiveYear|raw }} buton Last" rel="period=year">{% lang 'Year' %}</a>
						</span>
					</div>
					<h3 class="geral"><span class="icon"><i class="fa fa-shopping-cart"></i></span>{% lang 'StoreSnapshot' %}</h3>
					<div id="DashboardPerformanceIndicators">
						<div class="PanelSpace">
							{{ PerformanceIndicatorsTable|raw }}
						</div>
					</div>
				</div>
			</div>

			<div class="DashboardPanel DashboardPanelOrderBreakdown" style="{{ HideDashboardBreakdownGraph|raw }}">
				<div class="DashboardPanelContent">
					<span class="DashboardOrderBreakdownAllStatsButton">
						<a href="index.php?ToDo=viewStats" class="buton">{% lang 'ViewAllStatistics' %}</a>
					</span>
					<h3 class="pedidos"><span class="icon"><i class="fa fa-money"></i></span>{% lang 'OrderBreakDown' %} <small>({% lang 'Last7Days' %})</small></h3>
					<div class="PanelSpace">
						<ul class="OrderBreakdownChart">

							{{ DashboardBreakdownGraph|raw }}
							</ul>
						<div class="OrderBreakdownChartKey">
							<div class="First">{{ GraphSeriesLabel0|raw }}</div>
							<div>{{ GraphSeriesLabel1|raw }}</div>
							<div>{{ GraphSeriesLabel2|raw }}</div>
							<div>{{ GraphSeriesLabel3|raw }}</div>
							<div class="Last">{{ GraphSeriesLabel4|raw }}</div>
						</div>
					</div>
				</div>
			</div>
			<div class="DashboardPanel DashboardPanelHelpArticles" style="{{ HidePopularHelpArticles|raw }}">
				<div class="DashboardPanelContent" style="overflow: auto">
					<form action="{{ SearchKnowledgeBaseUrl|raw }}" method="post" class="DashboardHelpArticlesSearchForm" style="{{ HideSearchKnowledgeBase|raw }}">
						<input type="text" name="q" class="DashboardHelpSearchQuery DashboardHelpSearchHasImage" />
						<span class="DashboardActionButton">
							<a href="#">
								<span class="ButtonText">{% lang 'Go' %}</span>
							</a>
						</span>
					</form>
					<h3>{% lang 'PopularHelpArticles' %}</h3>
					<div class="HelpArticlesList">
						<img src="images/ajax-loader.gif" alt="" />
					</div>
					<span class="DashboardActionButton DashboardBrowseAllHelpArticlesButton">
						<a href="{{ ViewKnowledgeBaseLink|raw }}">
							<span class="ButtonArrow"></span>
							<span class="ButtonText ButtonTextWithArrow">{% lang 'ViewKnowledgeBase' %}</span>
						</a>
					</span>
				</div>
			</div>
		</div>
		<div class="DashboardLeftColumn">

			{{ TrialExpiryMessage|raw }}

			{{ VersionCheckMessage|raw }}
			{% if googleProductSearch.failed %}
				<div class="DashboardPanel DashboardGoogleProductSearchWarning" data-time="{{ googleProductSearch.time }}">
					<div class="DashboardPanelContent">
						<a href="#" class="ToggleLink GoogleProductSearchWarningToggleLink">{{ lang.HideThisMessage | lower }}</a>
						<h3>{% lang 'Warning' %}...</h3>
						<div class="warning">{% lang 'GoogleBaseWarning' with { 'fail_count': googleProductSearch.failed, 'total_count': googleProductSearch.total } %}</div>
						<ul>
							<li>{% lang 'GoogleBaseWarning_1' %}</li>
							<li>{% lang 'GoogleBaseWarning_2' with { 'link': 'https://support.bigcommerce.com/questions/1414/' } %}</li>
						</ul>
					</div>
				</div>
			{% endif %}

			<div class="DashboardPanel DashboardPanelFeatured DashboardPanelOverview">
				<div class="DashboardPanelContent">
					<div class="DashboardAtAGlance" style="{{ HideAtAGlance|raw }}">
						<ul>
							{{ AtGlanceItems|raw }}
						</ul>
						<br class="Clear" />
					</div>
				</div>
			</div>

			<div class="DashboardPanel DashboardPanelRecentOrders" style="{{ HideRecentOrders|raw }}">
				<div class="DashboardPanelContent">
					<span class=" DashboardRecentOrdersAllButton">
						<a href="index.php?ToDo=viewOrders" class="buton">{% lang 'ViewAllOrders' %}</a>
					</span>
					<h3 class="recente"><span id="DashboardRecentOrdersTitle"><span class="icon"><i class="fa fa-home"></i></span>{% lang 'RecentOrders' %}</span> {% lang 'LowerOn' %} {{ StoreName|raw }}</h3>
					<div class="DashboardFilterOptions">
						<div>
							{% lang 'Show' %}:
						</div>
						<ul class="DashboardRecentOrdersToggle">
							<li class="{{ RecentOrdersActiveRecentClass|raw }}"><a href="#" rel="status=recent">{% lang 'RecentOrders' %}</a></li>
							<li class="{{ RecentOrdersActivePendingClass|raw }}"><a href="#" rel="status=pending">{% lang 'PendingOrders' %}</a></li>
							<li class="{{ RecentOrdersActiveCompletedClass|raw }}"><a href="#" rel="status=completed">{% lang 'CompletedOrders' %}</a></li>
							<li class="{{ RecentOrdersActiveRefundedClass|raw }}"><a href="#" rel="status=refunded">{% lang 'RefundedOrders' %}</a></li>
						</ul>
						<br style="clear: left;" />
					</div>
					<div class="PanelSpace">
						<ul style="clear: left" class="DashboardRecentOrderList">
							{{ RecentOrdersList|raw }}
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
	<br class="Clear" />
</div>
{% if displayAnnouncements %}
<script language="javascript" src="script/announcements.js?{{ JSCacheToken }}" />
{% endif %}

<script language="javascript" src="script/category.selector.js?{{ JSCacheToken }}"></script>
<script language="javascript" src="script/google.ps.category.warning.js?{{ JSCacheToken }}"></script>

<script language="javascript" type="text/javascript">//<![CDATA[
	lang.googleCategorySelectLeafCategorySelected = "{% jslang 'GoogleCategoryMappingLeafCategorySelected' %}";
	lang.categorySelectChooseLeafCategory = "{% jslang 'CategoryMappingChooseLeafCategory' %}";
	lang.ChooseGooglePsCategory = "{% jslang 'ChooseGooglePsCategory' %}";
	lang.ChooseGooglePsCategoryIntro = "{% jslang 'ChooseGooglePsCategoryIntro' %}";
//]]></script>

{% include 'googleps.category.warning.tpl' %}
{% include 'googleps.bulkedit.modal.tpl' %}
