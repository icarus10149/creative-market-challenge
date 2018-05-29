# Creative Market Code Challenge

## Scoping Notes

Goal: Create a message board, allowing users to post and view comments. Additionally, track the comment count of each user. Threading/inline replies are not a requirement, but a nice to have.

Notes: "Posts" are being referred to as "Remarks" - as I wanted to create one object that was capable of being either a first ancestor, or a child of an ancestor - and Remark seemed to be a good classification. 
I have left the DB structure and data handling open to allow Remarks to have an associated parent_remark_id - which could be used to track the relationship of one Remark to another. 

Must Haves:
* table to store remarks
* table to store/increment remark counts per user
* a display of posted remarks
* a form to post remarks

Nice to Haves:
* Threading/inline replies
* Handle posting to the server and updating the view without page reload
* Enhancing the UI beyond plain markup and basic styles
* Use of Laravel/Vue


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

### remark_counts Table Fields

+------------+--------------+------+-----+---------+-------+                                                                                                                                           
| Field      | Type         | Null | Key | Default | Extra |                                                                                                                                           
+------------+--------------+------+-----+---------+-------+                                                                                                                                           
| username   | varchar(191) | NO   | PRI | NULL    |       |                                                                                                                                           
| count      | int(11)      | NO   |     | 0       |       |                                                                                                                                           
| created_at | timestamp    | YES  |     | NULL    |       |                                                                                                                                           
| updated_at | timestamp    | YES  |     | NULL    |       |                                                                                                                                           
+------------+--------------+------+-----+---------+-------+
