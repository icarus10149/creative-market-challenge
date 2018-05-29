# Creative Market Code Challenge

## DB Tables
* remarks
* remark_counts

### remarks Table Fields
+------------------+------------------+------+-----+---------+----------------+                                                                                                                        
| Field            | Type             | Null | Key | Default | Extra          |                                                                                                                        
+------------------+------------------+------+-----+---------+----------------+                                                                                                                        
| id               | int(10) unsigned | NO   | PRI | NULL    | auto_increment |                                                                                                                        
| username         | varchar(191)     | NO   |     | NULL    |                |                                                                                                                        
| parent_remark_id | int(11)          | YES  |     | NULL    |                |                                                                                                                        
| remark           | text             | NO   |     | NULL    |                |                                                                                                                        
| created_at       | timestamp        | YES  |     | NULL    |                |                                                                                                                        
| updated_at       | timestamp        | YES  |     | NULL    |                |                                                                                                                        
+------------------+------------------+------+-----+---------+----------------+ 

### remark_counts Table Field

+------------+--------------+------+-----+---------+-------+                                                                                                                                           
| Field      | Type         | Null | Key | Default | Extra |                                                                                                                                           
+------------+--------------+------+-----+---------+-------+                                                                                                                                           
| username   | varchar(191) | NO   | PRI | NULL    |       |                                                                                                                                           
| count      | int(11)      | NO   |     | 0       |       |                                                                                                                                           
| created_at | timestamp    | YES  |     | NULL    |       |                                                                                                                                           
| updated_at | timestamp    | YES  |     | NULL    |       |                                                                                                                                           
+------------+--------------+------+-----+---------+-------+