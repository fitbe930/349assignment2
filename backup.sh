#!/bin/bash

mysqldump -h db.cgmjlbiqninb.us-east-1.rds.amazonaws.com -u user -p studs > backup.sql

aws s3 cp backup.sql s3://"rds-backup-cosc349"/


