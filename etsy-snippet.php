<?php

$sql_metrics = array(
    array("binlog", "Binlog IO"),
    array("innodb_data_file", "InnoDB data IO"),
    array("innodb_log_file", "InnoDB log IO"),
    array("innodb_mutex", "InnoDB locks"),
    array("myisam_dfile", "MyISAM data IO"),
    array("myisam_kfile", "MyISAM index IO"),
    array("relaylog", "Relaylog IO"),
    array("relaylog_info", "Relaylog info IO"),
    array("other_io", "Other IO"),
    array("other_mutex", "Other mutexes"),
    array("rwlocks", "Other rwlocks"),
    array("other_work", "Processing query"),
    array("wait_for_update", "Idle"),
);

$host = "my-database-server_example_com";
foreach($hosts as $host) {
    $g = new Graphite($time);

    $g->setTitle("Replication load on $host (SQL thread)");
    $g->setVTitle("");
    foreach($sql_metrics as $metric) {
      $g->addMetric("alias(sys.$host.mysql.slave_sql.${metric[0]}, \"${metric[1]}\")");
    }
    $g->displayStacked(True);
    $g->setYMin(0);
    $g->setYMax(105);
    print($g->getDashboardHTMLmod(1000,500,$hostsearch);

}
?>
