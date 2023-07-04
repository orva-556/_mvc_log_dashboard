<?php

class Log_model
{
    private $logSource;
    private $logCount;

    public function __construct()
    {
        $this->logSource = new LogCatcher;
    }
    
    public function getAllLog()
    {
        foreach ($this->logSource->catchLog() as $logList) {
            $origin_snort_timestamp_format = 'm/d/y-H:i:s.u';
            $logValue['id'] = $logList['3'];
            $logValue['rsyslog_date'] = date('d/m/Y', strtotime($logList['0']));
            $logValue['rsyslog_time'] = date('H:i:s ', strtotime($logList['1']));
            $logValue['snort_date'] = DateTimeImmutable::createFromFormat($origin_snort_timestamp_format, $logList['4'])->format('d/m/Y');
            $logValue['snort_time'] = DateTimeImmutable::createFromFormat($origin_snort_timestamp_format, $logList['4'])->format('H:i:s');
            $logValue['target_hostname'] = $logList['2'];
            $logValue['target_ip'] = $logList['8'];
            $logValue['target_port'] = $logList['9'];
            $logValue['target_mac_addr'] = $logList['15'];
            $logValue['attacker_ip'] = $logList['6'];
            $logValue['attacker_port'] = $logList['7'];
            $logValue['attacker_mac_addr'] = $logList['14'];
            $logValue['protocol'] = $logList['10'];
            $logValue['flags'] = $logList['11'];
            $logValue['rev'] = $logList['13'];
            $logValue['tcplen'] = $logList['16'];
            $logValue['sid'] = $logList['12'];
            if ($logValue['sid'] == "1000003") {
                $logValue['type'] = "SSH Brute Force";
                $logValue['service'] = "SSH";
                $logValue['method'] = "Brute Force";
            } else if ($logValue['sid'] == "1000002") {
                $logValue['type'] = "FTP Brute Force";
                $logValue['service'] = "FTP";
                $logValue['method'] = "Brute Force";
            } else if ($logValue['sid'] == "1000001") {
                $logValue['type'] = "SQL Injection";
                $logValue['service'] = "Database";
                $logValue['method'] = "SQL Injection";
            }
            $output[] = $logValue;
        }
        return $output;
    }

    public function countLog()
    {
        $this->logCount = count($this->logSource->catchLog());
        return $this->logCount;
    }
    
    public function searchLog($keyword = '')
    {
        // $log_catch = shell_exec("cat /var/log/client/snort/log.csv | grep -i '{$keyword}' | sed 's/ //g' | tr ',' ' '");
        $log_catch = shell_exec("cat /var/log/client/snort/log.csv | grep -i '$keyword' | sed 's/ //g' | tr ',' ' '");
        
        if ($log_catch == null) {
            $searchOutput = [];
            return $searchOutput;
        } else {
            $log_clean = array_reverse(array_chunk(explode(" ", implode(" ", array_filter(explode("\n", $log_catch)))), 17));
            foreach ($log_clean as $logList) {
                $origin_snort_timestamp_format = 'm/d/y-H:i:s.u';
                $logValue['id'] = $logList['3'];
                $logValue['rsyslog_date'] = date('d/m/Y', strtotime($logList['0']));
                $logValue['rsyslog_time'] = date('H:i:s ', strtotime($logList['1']));
                $logValue['snort_date'] = DateTimeImmutable::createFromFormat($origin_snort_timestamp_format, $logList['4'])->format('d/m/Y');
                $logValue['snort_time'] = DateTimeImmutable::createFromFormat($origin_snort_timestamp_format, $logList['4'])->format('H:i:s');
                $logValue['target_hostname'] = $logList['2'];
                $logValue['target_ip'] = $logList['8'];
                $logValue['target_port'] = $logList['9'];
                $logValue['target_mac_addr'] = $logList['15'];
                $logValue['attacker_ip'] = $logList['6'];
                $logValue['attacker_port'] = $logList['7'];
                $logValue['attacker_mac_addr'] = $logList['14'];
                $logValue['protocol'] = $logList['10'];
                $logValue['flags'] = $logList['11'];
                $logValue['rev'] = $logList['13'];
                $logValue['tcplen'] = $logList['16'];
                $logValue['sid'] = $logList['12'];
                if ($logValue['sid'] == "1000003") {
                    $logValue['type'] = "SSH Brute Force";
                    $logValue['service'] = "SSH";
                    $logValue['method'] = "Brute Force";
                } else if ($logValue['sid'] == "1000002") {
                    $logValue['type'] = "FTP Brute Force";
                    $logValue['service'] = "FTP";
                    $logValue['method'] = "Brute Force";
                } else if ($logValue['sid'] == "1000001") {
                    $logValue['type'] = "SQL Injection";
                    $logValue['service'] = "Database";
                    $logValue['method'] = "SQL Injection";
                }
                $searchOutput[] = $logValue;
            }
            return $searchOutput;
        }
    }

    public function countSearchLog($keyword)
    {
        $this->logCount = count($this->searchLog($keyword));
        return $this->logCount;
    }
}