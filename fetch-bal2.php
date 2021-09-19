<?php
	//1st search bar only
	if(isset($_POST["submit"]) and $_POST["DoesNotMatter1"] == "student_id" )
	
	{

	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%'*/
	and student_id LIKE '".$search."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter1"] == "first_name" )

	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%'*/
	and first_name LIKE '".$search."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter1"] == "last_name" )

	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%'*/
	and last_name LIKE '".$search."%'
	";
	
	}
	
	
	//below syntax should be default
	
	
	//2nd search bar only
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "tuition" and $_POST["search_textx"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	and total_tuition >= '".$searchz."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "downpayment" and $_POST["search_textx"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and downpayment >= '".$searchz."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "month1" and $_POST["search_textx"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and month1 >= '".$searchz."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "month2" and $_POST["search_textx"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and month2 >= '".$searchz."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "month3" and $_POST["search_textx"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and month3 >= '".$searchz."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "month4" and $_POST["search_textx"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and month4 >= '".$searchz."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "month5" and $_POST["search_textx"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and month5 >= '".$searchz."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "month6" and $_POST["search_textx"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and month6 >= '".$searchz."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "month7" and $_POST["search_textx"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and month7 >= '".$searchz."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "month8" and $_POST["search_textx"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and month8 >= '".$searchz."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "month9" and $_POST["search_textx"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and month9 >= '".$searchz."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "balance" and $_POST["search_textx"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and balance >= '".$searchz."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "monthlypayment" and $_POST["search_textx"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and monthly_payment >= '".$searchz."%'
	";
	
	}
	
	//3rd search bar only
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "tuition" and $_POST["search_textz"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and total_tuition <= '".$searchx."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "downpayment" and $_POST["search_textz"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and downpayment <= '".$searchx."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "month1" and $_POST["search_textz"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and month1 <= '".$searchx."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "month2" and $_POST["search_textz"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and month2 <= '".$searchx."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "month3" and $_POST["search_textz"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and month3 <= '".$searchx."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "month4" and $_POST["search_textz"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and month4 <= '".$searchx."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "month5" and $_POST["search_textz"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and month5 <= '".$searchx."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "month6" and $_POST["search_textz"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and month6 <= '".$searchx."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "month7" and $_POST["search_textz"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and month7 <= '".$searchx."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "month8" and $_POST["search_textz"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and month8 <= '".$searchx."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "month9" and $_POST["search_textz"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and month9 <= '".$searchx."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "balance" and $_POST["search_textz"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and balance <= '".$searchx."%'
	";
	
	}
	
	else if(isset($_POST["submit"]) and $_POST["DoesNotMatter2"] == "monthlypayment" and $_POST["search_textz"] == "")
	
	{
	
	$search = $_POST["search_text"];
	$searchz = $_POST["search_textz"];
	$searchx = $_POST["search_textx"];
	
	$results = "
	SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'
	/*and first_name LIKE '".$search."%' and last_name LIKE '".$searchz."%' */
	/*and total_tuition >= '".$searchz."%' and total_tuition <= '".$searchx."%' */
	and monthly_payment <= '".$searchx."%'
	";
	
	}
	
	
else
{
	$results = "SELECT student_id, first_name, last_name, month1, month2, month3, month4, month5, month6, month7, month8, month9, total_tuition, downpayment, balance, monthly_payment, tag, user_id FROM birthright_db.accounts, birthright_db.login where user_id = student_id and tag = '2'";
}

?>