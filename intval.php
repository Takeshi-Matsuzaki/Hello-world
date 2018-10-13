<?php
  // intvalによる自然数
  // ※エラーの場合は0が戻るので0の扱いに注意
  if (0 < intval($value)) {
    return True;
  } else {
    return False;
  }
?>