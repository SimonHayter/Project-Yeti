<?php /* Template Name: Kitchen Sink */ get_header(); ?>
<?php ?>
<?php while (have_posts()) : the_post(); ?>
<div id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<div class="expanded row">
		<div class="medium-9 large-10 medium-push-3 large-push-2 columns">
			<?php the_content(); ?>
		</div>
		<div class="medium-3 large-2 medium-pull-9 large-pull-10 columns">
			<ul class="vertical menu docs-menu" id="docs-menu">
				<li class="docs-menu-title">General</li>
				<li><li><a href="/kitchen-sink/global/">Global Styles</a></li>
				<li><a href="/kitchen-sink/rtl/">Right-to-Left Support</a></li>
				<li><a href="/kitchen-sink/sass/">Sass</a></li>
				<li><a href="/kitchen-sink/javascript/">JavaScript</a></li>
				<li><a href="/kitchen-sink/javascript-utilities/">JavaScript Utilities</a></li>
				<li><a href="/kitchen-sink/media-queries/">Media Queries</a></li>
				<li><a href="/kitchen-sink/grid/">Grid</a></li>
				<li><a href="/kitchen-sink/flex-grid/">Flex Grid</a></li>
				<li><a href="/kitchen-sink/forms/">Forms</a></li>
				<li><a href="/kitchen-sink/visibility/">Visibility Classes</a></li>
				<li><a href="/kitchen-sink/float-classes/">Float Classes</a></li>
				<li class="docs-menu-title">Typography</li>
				<li><a href="/kitchen-sink/typography-base/">Base Styles</a></li>
				<li><a href="/kitchen-sink/typography-helpers/">Helper Classes</a></li>
				<li class="docs-menu-title">Controls</li>
				<li><a href="/kitchen-sink/button/">Button</a></li>
				<li><a href="/kitchen-sink/button-group/">Button Group</a></li>
				<li><a href="/kitchen-sink/close-button/">Close Button</a></li>
				<li><a href="/kitchen-sink/slider/">Slider <span class="label">JS</span></a></li>
				<li><a href="/kitchen-sink/switch/">Switch</a></li>
				<li class="docs-menu-title">Navigation</li>
				<li><a href="/kitchen-sink/navigation/">Overview</a></li>
				<li><a href="/kitchen-sink/menu/">Menu</a></li>
				<li><a href="/kitchen-sink/dropdown-menu/">Dropdown Menu <span class="label">JS</span></a></li>
				<li><a href="/kitchen-sink/drilldown-menu/">Drilldown Menu <span class="label">JS</span></a></li>
				<li><a href="/kitchen-sink/accordion-menu/">Accordion Menu <span class="label">JS</span></a></li>
				<li><a href="/kitchen-sink/top-bar/">Top Bar</a></li>
				<li><a href="/kitchen-sink/responsive-navigation/">Responsive Navigation</a></li>
				<li><a href="/kitchen-sink/magellan/">Magellan <span class="label">JS</span></a></li>
				<li><a href="/kitchen-sink/pagination/">Pagination</a></li>
				<li><a href="/kitchen-sink/breadcrumbs/">Breadcrumbs</a></li>
				<li class="docs-menu-title">Containers</li>
				<li><a href="/kitchen-sink/accordion/">Accordion <span class="label">JS</span></a></li>
				<li><a href="/kitchen-sink/callout/">Callout</a></li>
				<li><a href="/kitchen-sink/dropdown/">Dropdown <span class="label">JS</span></a></li>
				<li><a href="/kitchen-sink/media-object/">Media Object</a></li>
				<li><a href="/kitchen-sink/off-canvas/">Off-canvas <span class="label">JS</span></a></li>
				<li><a href="/kitchen-sink/reveal/">Reveal <span class="label">JS</span> <small>Modal</small></a></li>
				<li><a href="/kitchen-sink/table/">Table</a></li>
				<li><a href="/kitchen-sink/tabs/">Tabs <span class="label">JS</span></a></li>
				<li class="docs-menu-title">Media</li>
				<li><a href="/kitchen-sink/badge/">Badge</a></li>
				<li><a href="/kitchen-sink/flex-video/">Flex Video</a></li>
				<li><a href="/kitchen-sink/label/">Label</a></li>
				<li><a href="/kitchen-sink/orbit/">Orbit <span class="label">JS</span> <small>Carousel</small></a></li>
				<li><a href="/kitchen-sink/progress-bar/">Progress Bar</a></li>
				<li><a href="/kitchen-sink/thumbnail/">Thumbnail</a></li>
				<li><a href="/kitchen-sink/tooltip/">Tooltip <span class="label">JS</span></a></li>
				<li class="docs-menu-title">Plugins</li>
				<li><a href="/kitchen-sink/abide/">Abide <small>Form Validation</small></a></li>
				<li><a href="/kitchen-sink/equalizer/">Equalizer <small>Column Alignment</small></a></li>
				<li><a href="/kitchen-sink/interchange/">Interchange <small>Responsive Content</small></a></li>
				<li><a href="/kitchen-sink/toggler/">Toggler <small>CSS Helper</small></a></li>
				<li><a href="/kitchen-sink/sticky/">Sticky <small>Header/Sidebar</small></a></li>
				<li class="docs-menu-title">Sass</li>
				<li><a href="/kitchen-sink/sass-functions/">Functions</a></li>
				<li><a href="/kitchen-sink/sass-mixins/">Mixins</a></li>
				<li class="docs-menu-title">Libraries</li>
				<li><a href="/kitchen-sink/motion-ui/">Motion UI</a></li>
				<li><a href="/kitchen-sink/panini/">Panini</a></li>
			</ul>
		</div>
	</div>
</div>
<?php endwhile; ?>
<?php get_footer(); ?>