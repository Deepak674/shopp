<div class="editor">
	<p class="clearfix">
		<div class="address-controls button-group">
		<input type="button" id="load-${type}-address" name="load-${type}-customer" value="<?php Shopp::_e('Load Address'); ?>" class="button button-secondary button-edit">
		<input type="button" id="load-${type}-address" name="load-${type}-customer" value="<?php Shopp::_e('Copy %s', 'billing' == $type ? Shopp::__('Shipping') : Shopp::__('Billing')); ?>" class="button button-secondary button-edit">
		</div>
	</p>
	<p class="inline-fields">
		<span>
		<label for="address-city"><?php _e('First Name','Shopp'); ?></label>
		<input type="text" name="${type}[firstname]" id="${type}-firstname" value="${firstname}" form="order-updates" /><br />
		</span>
		<span>
		<label for="address-city"><?php _e('Last Name','Shopp'); ?></label>
		<input type="text" name="${type}[lastname]" id="${type}-lastname" value="${lastname}" form="order-updates" /><br />
		</span>
	</p>
	<p>
		<label for="address-address"><?php _e('Street Address','Shopp'); ?></label>
		<input type="text" name="${type}[address]" id="${type}-address" value="${address}" form="order-updates" /><br />
		<input type="text" name="${type}[xaddress]" id="${type}-xaddress" value="${xaddress}" form="order-updates" /><br />
	</p>
	<p class="inline-fields">
		<span>
		<label for="address-city"><?php _e('City','Shopp'); ?></label>
		<input type="text" name="${type}[city]" id="${type}-city" value="${city}" size="14" form="order-updates" /><br />
		</span>
		<span id="${type}-state-inputs">
			<label for="address-state"><?php _e('State / Province','Shopp'); ?></label>
			<select name="${type}[state]" id="${type}-state-menu" form="order-updates">${statemenu}</select>
			<input type="text" name="${type}[state]" id="${type}-state" value="${state}" form="order-updates" size="12" disabled="disabled" class="hidden" />
		</span>
	</p>
	<p class="inline-fields">
		<span>
		<label for="address-postcode"><?php _e('Postal Code','Shopp'); ?></label>
		<input type="text" name="${type}[postcode]" id="${type}-postcode" value="${postcode}" size="10" form="order-updates" /><br />
		</span>
		<span>
			<label for="address-country"><?php _e('Country','Shopp'); ?></label>
			<select name="${type}[country]" id="${type}-country" form="order-updates">
			<?php echo Shopp::menuoptions($Purchase->_countries, ( 'billing' == $type ? $Purchase->country : $Purchase->shipcountry ), true); ?>
			</select>
		</span>
	</p>
	<div class="editing-controls">
		<input type="submit" id="cancel-edit-address" name="cancel-edit-address" value="<?php Shopp::_e('Cancel'); ?>" class="button-secondary" />
		<div class="alignright">
		<input type="submit" name="submit-address" value="<?php Shopp::_e('Update'); ?>" class="button-primary" />
		</div>
	</div>
</div>
