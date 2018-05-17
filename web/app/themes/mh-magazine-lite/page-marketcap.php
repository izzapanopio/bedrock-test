<?php
get_header();
?>
	<div class="crypto-table-sorting">
		<div class="crypto-table-sort-category">
			<select id="marketcap-sort-category">
				<option value="rank">Rank</option>
				<option value="name">Name</option>
				<option value="price">Price</option>
				<option value="cap">Market Cap</option>
				<option value="volume">Volume 24H</option>
				<option value="change">Change 24H</option>
			</select>
		</div>

		<div class="crypto-table-sorting-arrows" id="marketcap-sort-by">
			<i class="fa fa-long-arrow-up icon-arrow-up"></i>
			<i class="fa fa-long-arrow-down icon-arrow-down"></i>
		</div>
	</div>
    <table class="crypto-table" id="marketcap">
      	<thead class="crypto-table-head">
        	<tr class="crypto-table-row">
	          <th id="marketcap-rank" class="crypto-table-header">Rank</th>
	          <th id="marketcap-name" class="crypto-table-header">Name</th>
	          <th id="marketcap-price" class="crypto-table-header">Price</th>
	          <th id="marketcap-cap" class="crypto-table-header">Market Cap</th>
	          <th id="marketcap-volume" class="crypto-table-header">Volume 24H</th> 
	          <th id="marketcap-change" class="crypto-table-header">Change 24H</th>
      		</tr>
    	</thead>
    	<tbody class="crypto-table-body"></tbody>
    </table>
    <div class="load-more-container">
    	<button id="marketcap-load-more" class="load-more button button-border button-inverse">Load More</button>
	</div>
<?php
get_footer();
?>