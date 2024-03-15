use employees;
    DELIMITER $$
DROP FUNCTION IF EXISTS net_salary;
CREATE FUNCTION net_salary(gross_salary INT(11)) RETURNS FLOAT(10,2)
BEGIN
RETURN gross_salary*0.6;
END;
$$
DELIMITER ;