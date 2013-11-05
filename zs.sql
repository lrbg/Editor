/*
* Create/Insert/Select a table.
*/
-- create the table
CREATE TABLE tab(col1 int, col2 varchar);

-- insert data into the table
INSERT INTO tab values(1, 'text');

-- select the table
SELECT count(*) AS "COLUMN" FROM tab;
