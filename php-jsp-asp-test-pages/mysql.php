<?php
$host='localhost';
$user_name='root';
$password='7256958';

$conn=mysql_connect($host,$user_name,$password);
if (!$conn)
{
    die('���ݿ�����ʧ�ܣ�'.mysql_error());
}
echo '���ݿ����ӳɹ���';

if (mysql_close($conn))
{
    echo '<br/>...<br/>';
    echo '�����ݿ�������Ѿ��ɹ��ر�';
}
?>
