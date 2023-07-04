<div class="card-header bg-dark text-start text-white" style="letter-spacing: 1px; font-size: 17px;">
    <strong>
        ATTACK ATTEMPT RECORD
    </strong>
</div>
<div class="card-body m-0 p-0" style="max-height: 400px; overflow-y: scroll;">
    <div class="accordion ">
        <?php
        $x = 0;
        if ($data['log_search'] == null) {
            $data['log_searchCount'] = 0; ?>
            <div class="accordion-item border-0 rounded-0 d-flex align-items-center justify-content-center p-3">
                <span style="letter-spacing: 1px;" class=""><b>No Activities.</b></span>
            </div>
            <?php
        } else {
            foreach ($data['log_search'] as $logValue) {
                //==== accordion ===========================================================
                $id = 'id-' . $x;
                $x++;
                //==========================================================================
            ?>
                <div class="accordion-item rounded-0 border">
                    <div class="accordion-button border-0 rounded-0 collapsed pt-2 pb-2" data-bs-toggle="collapse" data-bs-target="#<?= $id; ?>">
                        <table width="" class="table table-borderless m-0">
                            <tr>
                                <td width="58%" class="ps-0">
                                    Alert : <strong><?= $logValue['type']; ?></strong> <i>in</i> <strong><?= $logValue['target_hostname']; ?></strong>
                                </td>
                                <td width="30%" class="ps-0">
                                    Time : <strong><?= $logValue['snort_date']; ?></strong> <strong><?= $logValue['snort_time']; ?></strong>
                                </td>
                                <td width="12%" class="ps-0">
                                    ID : <strong><?= $logValue['id']; ?></strong>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div id="<?= $id; ?>" class="accordion-collapse collapse" aria-labelledby="panelsStayOpen-headingOne">
                        <div class="accordion-body">
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="my-border mb-3">
                                        <table class="table table-responsive m-0 p-0">
                                            <thead>
                                                <tr class="bg-secondary text-white">
                                                    <th colspan="3">TARGET INFO</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-secondary">
                                                <tr>
                                                    <td width="30%">Data Center</td>
                                                    <td>:</td>
                                                    <td><strong><?= $logValue['target_hostname']; ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td width="30%">Server</td>
                                                    <td>:</td>
                                                    <td><strong><?= $logValue['service']; ?> Server</strong></td>
                                                </tr>
                                                <tr>
                                                    <td width="30%">IP Address</td>
                                                    <td>:</td>
                                                    <td><strong><?= $logValue['target_ip']; ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td width="30%">Port</td>
                                                    <td>:</td>
                                                    <td><strong><?= $logValue['target_port']; ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td width="30%">Mac Address</td>
                                                    <td>:</td>
                                                    <td><strong><?= $logValue['target_mac_addr']; ?></strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="my-border mb-3">
                                        <table class="table table-responsive p-0 m-0">
                                            <thead>
                                                <tr class="bg-secondary text-white">
                                                    <th colspan="4">ATTACKER INFO</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-secondary">
                                                <tr>
                                                    <td width="30%">Method</td>
                                                    <td>:</td>
                                                    <td><strong><?= $logValue['method']; ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td width="30%">Protocol</td>
                                                    <td>:</td>
                                                    <td><strong><?= $logValue['protocol']; ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td width="30%">IP Address</td>
                                                    <td>:</td>
                                                    <td><strong><?= $logValue['attacker_ip']; ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td width="30%">Port</td>
                                                    <td>:</td>
                                                    <td><strong><?= $logValue['attacker_port']; ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td width="30%">Mac Address</td>
                                                    <td>:</td>
                                                    <td><strong><?= $logValue['attacker_mac_addr']; ?></strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="my-border mb-3">
                                        <table class="table table-responsive p-0 m-0">
                                            <thead>
                                                <tr class="bg-secondary text-white">
                                                    <th colspan="4">SNORT TIMESTAMP</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-secondary">
                                                <tr>
                                                    <td width="30%">Date</td>
                                                    <td>:</td>
                                                    <td><strong><?= $logValue['snort_date']; ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td width="30%">Time</td>
                                                    <td>:</td>
                                                    <td><strong><?= $logValue['snort_time']; ?></strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="my-border mb-3">
                                        <table class="table table-responsive p-0 m-0">
                                            <thead>
                                                <tr class="bg-secondary text-white">
                                                    <th colspan="4">RSYSLOG TIMESTAMP</th>
                                                </tr>
                                            </thead>
                                            <tbody class="table-secondary">
                                                <tr>
                                                    <td width="30%">Date</td>
                                                    <td>:</td>
                                                    <td><strong><?= $logValue['rsyslog_date']; ?></strong></td>
                                                </tr>
                                                <tr>
                                                    <td width="30%">Time</td>
                                                    <td>:</td>
                                                    <td><strong><?= $logValue['rsyslog_time']; ?></strong></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } ?>
        <?php } ?>
    </div>
</div>
<div class="card-footer bg-dark">
    <div class="row">
        <div class="text-white">
            <span class="text-muted">Log Count : </span>
            <strong class=""><?= $data['log_searchCount']; ?></strong>
            <a href="auth/logout" type="button" class="badge btn btn-danger btn-sm float-end">
                <i class="fa fa-sign-out" aria-hidden="true"></i>
                Sign Out
            </a>
        </div>
    </div>
</div>