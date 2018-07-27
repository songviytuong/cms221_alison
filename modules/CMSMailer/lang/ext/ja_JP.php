<?php
$lang['friendlyname']='CMSメーラーモジュール';
$lang['help']='<h3>何ができるのでしょうか?</h3>
<p>このモジュールにはエンドユーザー機能はありません。他のモジュールと統合し、メール機能を提供します。他にはなにもありません。</p>
<h3>使用方法</h3>
<p>このモジュールはPHPMailerのメソッドと変数の単純なラッパーを提供します。他モジュール開発者によって利用できるようにデザインされており、 下記の例のように簡単なAPIインターフェースです。より詳細はPHPMailerドキュメントを参照下さい。</p>
<h3>利用例</h3>
<pre>
  $cmsmailer = $this->GetModuleInstance(\'CMSMailer\');
  $cmsmailer->AddAddress(\'calguy1000@hotmail.com\',\'calguy\');
  $cmsmailer->SetBody(\'<h1>これはテストメッセージです。<h1>\');
  $cmsmailer->IsHTML(true);
  $cmsmailer->SetSubject(\'テストメッセージ\');
  $cmsmailer->Send();
</pre>
<h3>API</h3>
<ul>
<li><p><b>void reset()</b></p>
<p>オブジェクトを管理パネルの特定の値に戻す</p>
</li>
<li><p><b>string GetAltBody()</b></p>
<p>Eメールの代替本文を返す</p>
</li>
<li><p><b>void SetAltBody( $string )</b></p>
<p>Eメールの代替本文を設定</p>
</li>
<li><p><b>string GetBody()</b></p>
<p>Eメールのプライマリ本文を返す</p>
</li>
<li><p><b>void SetBody( $string )</b></p>
<p>Eメールのプライマリ本文を設定</p>
</li>
<li><p><b>string GetCharSet()</b></p>
<p>デフォルト: iso-8859-1</p>
<p>メーラーの文字セットを返す</p>
</li>
<li><p><b>void SetCharSet( $string )</b></p>
<p>メーラー文字セットを設定</p>
</li>
<li><p><b>string GetConfirmReadingTo()</b></p>
<p>Confirm Readingフラグで確認したアドレスを返す</p>
</li>
<li><p><b>void SetConfirmReadingTo( $address )</b></p>
<p>Confirm Readingアドレスを設定、設定解除</p>
</li>
<li><p><b>string GetContentType()</b></p>
<p>デフォルト: text/plain</p>
<p>コンテンツタイプを返す</p>
</li>
<li><p><b>void SetContentType()</b></p>
<p>コンテンツタイプを設定</p>
</li>
<li><p><b>string GetEncoding()</b></p>
<p>エンコーディングを返す</p>
</li>
<li><p><b>void SetEncoding( $encoding )</b></p>
<p>エンコーディングを設定</p>
<p>設定オプション: 8bit, 7bit, binary, base64, quoted-printable</p>
</li>
<li><p><b>string GetErrorInfo()</b></p>
<p>エラー情報を返す</p>
</li>
<li><p><b>string GetFrom()</b></p>
<p>現在の送信者アドレスを返す</p>
</li>
<li><p><b>void SetFrom( $address )</b></p>
<p>送信者アドレスを設定</p>
</li>
<li><p><b>string GetFromName()</b></p>
<p>現在の送信者名を返す</p>
</li>
<li><p><b>SetFromName( $name )</b></p>
<p>送信者名を設定</p>
</li>
<li><p><b>string GetHelo()</b></p>
<p>HELO文字列を返す</p>
</li>
<li><p><b>SetHelo( $string )</b></p>
<p>HELO文字列を設定</p>
<p>デフォルト値: $hostname</p>
</li>
<li><p><b>string GetHost()</b></p>
<p>セミコロンで区切ったSMTPホストを返す</p>
</li>
<li><p><b>void SetHost( $string )</b></p>
<p>ホストを設定</p>
</li>
<li><p><b>string GetHostName()</b></p>
<p>SMTP Heloに使用するホスト名を返す</p>
</li>
<li><p><b>void SetHostName( $hostname )</b></p>
<p>SMTP Heloに使用するホスト名を設定</p>
</li>
<li><p><b>string GetMailer()</b></p>
<p>送信方法を返す</p>
</li>
<li><p><b>void SetMailer( $mailer )</b></p>
<p>sendmail、mail、STMPのいづれかの送信方法の設定</p>
</li>
<li><p><b>string GetPassword()</b></p>
<p>SMTP認証のパスワードを返す</p>
</li>
<li><p><b>void SetPassword( $string )</b></p>
<p>SMTP認証のパスワードを設定</p>
</li>
<li><p><b>int GetPort()</b></p>
<p>SMTP接続のポート番号を返す</p>
</li>
<li><p><b>void SetPort( $int )</b></p>
<p>SMTP接続のポート番号を設定</p>
</li>
<li><p><b>int GetPriority()</b></p>
<p>メッセージの優先度を返す</p>
</li>
<li><p><b>void SetPriority( int )</b></p>
<p>メッセージの優先度を設定</p>
<p>設定値は、1=高, 3 =通常, 5 = 低</p>
</li>
<li><p><b>string GetSender()</b></p>
<p>送信者メール(return path)の文字列を返す</p>
</li>
<li><p><b>void SetSender( $address )</b></p>
<p>送信者文字列を設定</p>
</li>
<li><p><b>string GetSendmail()</b></p>
<p>sendmailのパスを返す</p>
</li>
<li><p><b>void SetSendmail( $path )</b></p>
<p>sendmailのパスを設定</p>
</li>
<li><p><b>bool GetSMTPAuth()</b></p>
<p>現在のSMTP認証フラグの値を返す</p>
</li>
<li><p><b>SetSMTPAuth( $bool )</b></p>
<p>SMTP認証フラグを設定</p>
</li>
<li><p><b>bool GetSMTPDebug()</b></p>
<p>SMTP認証デバッグフラグの値を返す</p>
</li>
<li><p><b>void SetSMTPDebug( $bool )</b></p>
<p>SMTP認証デバッグフラグを設定</p>
</li>
<li><p><b>bool GetSMTPKeepAlive()</b></p>
<p>SMTPのkeep aliveフラグの値を返す</p>
</li>
<li><p><b>SetSMTPKeepAlive( $bool )</b></p>
<p>SMTPのkeep aliveフラグを設定</p>
</li>
<li><p><b>string GetSubject()</b></p>
<p>現在のsubject文字列を返す</p>
</li>
<li><p><b>void SetSubject( $string )</b></p>
<p>subject文字列を設定</p>
</li>
<li><p><b>int GetTimeout()</b></p>
<p>タイムアウト値を返す</p>
</li>
<li><p><b>void SetTimeout( $seconds )</b></p>
<p>タイムアウト値を設定</p>
</li>
<li><p><b>string GetUsername()</b></p>
<p>SMTP認証ユーザー名を返す</p>
</li>
<li><p><b>void SetUsername( $string )</b></p>
<p>SMTP認証ユーザー名を設定</p>
</li>
<li><p><b>int GetWordWrap()</b></p>
<p>wordwrap値を返す</p>
</li>
<li><p><b>void SetWordWrap( $int )</b></p>
<p>wordwrap値を設定</p>
</li>
<li><p><b>AddAddress( $address, $name = \'\' )</b></p>
<p>アドレスを追加</p>
</li>
<li><p><b>AddAttachment( $path, $name = \'\', $encoding = \'base64\', $type = \'application/octent-stream\' )</b></p>
<p>添付ファイルを追加</p>
</li>
<li><p><b>AddBCC( $address, $name = \'\' )</b></p>
<p>BCCアドレスを追加</p>
</li>
<li><p><b>AddCC( $address, $name = \'\' )</b></p>
<p>CCアドレスを追加</p>
</li>
<li><p><b>AddCustomHeader( $txt )</b></p>
<p>カスタムヘッダーの追加</p>
</li>
<li><p><b>AddEmbeddedImage( $path, $cid, $name = \'\', $encoding = \'base64\', $type = \'application/octent-stream\' )</b></p>
<p>貼り付けイメージを追加</p>
</li>
<li><p><b>AddReplyTo( $address, $name = \'\' )</b></p>
<p>返信用アドレスを追加</p>
</li>
<li><p><b>AddStringAttachment( $string, $filename, $encoding = \'base64\', $type = \'application/octent-stream\' )</b></p>
<p>添付ファイルを追加</p>
</li>
<li><p><b>ClearAddresses()</b></p>
<p>全てのアドレスをクリア</p>
</li>
<li><p><b>ClearAllRecipients()</b></p>
<p>全ての受信者をクリア</p>
</li>
<li><p><b>ClearAttachments()</b></p>
<p>全ての添付ファイルをクリア</p>
</li>
<li><p><b>ClearBCCs()</b></p>
<p>全てのBCCアドレスをクリア</p>
</li>
<li><p><b>ClearCCs()</b></p>
<p>全てのCCアドレスをクリア</p>
</li>
<li><p><b>ClearCustomHeaders()</b></p>
<p>全てのカスタムヘッダーをクリア</p>
</li>
<li><p><b>ClearReplyto()</b></p>
<p>返信用アドレスをクリア</p>
</li>
<li><p><b>IsError()</b></p>
<p>エラー状況を確認</p>
</li>
<li><p><b>bool IsHTML( $bool )</b></p>
<p>html flagを設定</p>
<p><i>注意</i> これは恐らくgetとset兼用のメッソドです。</p>
</li>
<li><p><b>bool IsMail()</b></p>
<p>メールを使っているかどうかチェック</p>
</li>
<li><p><b>bool IsQmail()</b></p>
<p>qmailを使っているかどうかチェック</p>
</li>
<li><p><b>IsSendmail()</b></p>
<p>sendmailを使っているかどうかチェック</p>
</li>
<li><p><b>IsSMTP()</b></p>
<p>smtpを使っているかどうかチェック</p>
</li>
<li><p><b>Send()</b></p>
<p>現在処理中のメールを送信</p>
</li>
<li><p><b>SetLanguage( $lang_type, $lang_path = \'\' )</b></p>
<p>使用言語及び言語パス<em>(省略可)</em>を設定</p>
</li>
<li><p><b>SmtpClose()</b></p>
<p>SMTP接続をクローズ</p>
</li>
</ul>
<h3>サポート</h3>
<p>このモジュールは商業サポートがありません。しかし、一助になる資料はたくさんあります。:</p>
<ul>
<li>このモジュールの最新バージョン、FAQ、バグレポートの提出、有償サポートについては calguysのウェブサイトをご覧ください。<a href="http://techcom.dyndns.org">techcom.dyndns.org</a>.</li>
<li>このモジュールについてのフォーラムは以下です。<a href="http://forum.cmsmadesimple.org">CMS Made Simple Forums</a>.</li>
<li>製作者であるcalguy1000氏は、次のサイトによく参加しています。<a href="irc://irc.freenode.net/#cms">CMS IRC Channel</a>.</li>
<li>最近では、作成者に直接メールを送ることも可能になりました。</li>  
</ul>
<p>GPLのとおり、このソフトウェアには保障がありません。ライセンスの免責事項をお読みください。</p>

<h3>著作権に関して</h3>
<p>Copyright © 2005, Robert Campbell <a href="mailto:calguy1000@hotmail.com"><calguy1000@hotmail.com></a>. All Rights Are Reserved.</p>
<p>このモジュールは以下で配布しています： <a href="http://www.gnu.org/licenses/licenses.html#GPL">GNU Public License</a>. モジュールを使用する前にこのライセンスに同意する必要があります。</p>
';
$lang['moddescription']='PHPメーラーの単純なラッパーです。APIの全関数が一致し、デフォルト値に対する簡単なインターフェースがあります。';
$lang['postinstall']='CMSメーラーモジュールのインストールに成功しました。';
$lang['postuninstall']='CMSMailerモジュールはアンイントールされました。';
?>
