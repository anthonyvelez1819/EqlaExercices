use employees;
CREATE VIEW employees_info AS
    SELECT E.*, dept_name, title, salary
    FROM employees E
    INNER JOIN current_dept_emp CD ON CD.emp_no = e.emp_no
    INNER JOIN departments D ON D.dept_no = cd.dept_no
        INNER JOIN titles T ON t.emp_no = e.emp_no
        INNER JOIN salaries S ON s.emp_no = e.emp_no
        ;