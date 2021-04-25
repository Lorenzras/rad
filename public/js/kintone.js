
var body = {
    'app': 40,
    'query': ' order by レコード番号 asc limit 10',
    'fields': ['レコード番号', '作成日時', 'ドロップダウン']
  };
  
  kintone.api(kintone.api.url('/k/v1/records', true), 'GET', body, function(resp) {
    // success
    console.log(resp);
  }, function(error) {
    // error
    console.log(error);
  });