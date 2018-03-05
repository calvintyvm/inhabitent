<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">


<fieldset>
		<a href="#" class="icon-search" aria-hidden="true">
				<i class="fa fa-search"></i>
			</a>
		<label>
			<input type="search" class="search-field" placeholder="SEARCH ..." value="<?php echo esc_attr( get_search_query() ); ?>" name="s" title="Search for:" />
		</label>
	
			<input type ="submit" id ="button-submit" class="screen-reader-text" value =" <?php echo esc_html( 'Search' ); ?>"/>

	</fieldset>

</form>
