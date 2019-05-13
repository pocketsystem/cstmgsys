DROP TABLE CUSTOMER;

CREATE TABLE CUSTOMER (
  CTMID DECIMAL(3),     -- 顧客ID
  FNAME VARCHAR(60), -- 名(漢字)
  LNAME VARCHAR(60), -- 姓(漢字)
  FFRGN VARCHAR(60), -- 名(フリガナ)
  LFRGN VARCHAR(60), -- 姓(フリガナ)
  TEL   CHAR(11),    -- 電話番号
  MAIL  CHAR(100),   -- メールアドレス
  PSTCD CHAR(7),     -- 郵便番号
  ADRS1 CHAR(100),   -- 住所(都道府県)
  ADRS2 CHAR(100),   -- 住所(市町村)
  ADRS3 CHAR(100),   -- 住所(番地)
  CTYPE CHAR(1),     -- 個人/法人
  PRIMARY KEY (CTMID)
) DEFAULT CHARSET=utf8;

