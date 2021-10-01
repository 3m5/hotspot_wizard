CREATE TABLE tx_hotspotwizard_domain_model_hotspot (
	title varchar(255) NOT NULL DEFAULT '',
	image int(11) unsigned NOT NULL DEFAULT '0',
	hotspot_points int(11) unsigned NOT NULL DEFAULT '0'
);

CREATE TABLE tx_hotspotwizard_domain_model_hotspotpoint (
	hotspot int(11) unsigned DEFAULT '0' NOT NULL,
	x_coordinate int(11) NOT NULL DEFAULT '0',
	y_coordinate int(11) NOT NULL DEFAULT '0',
	description varchar(255) NOT NULL DEFAULT '',
	link varchar(255) NOT NULL DEFAULT ''
);
