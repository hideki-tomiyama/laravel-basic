<!DOCTYPE html>
<html lang="ja">
 <head>
  <title>Laravel基礎</title>
  <meta chrset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
 </head>

  <body>
    <table>
      <tr>
       <th>ID</th>
       <td>{{ $product->id}}</td>
      </tr>
      <tr>
       <th>商品名</th>
       <td>{{ $product->product_name}}</td>
      </tr>    
      <tr>
       <td>価格</td>
       <td>{{ $product->price}}</td>
      </tr>
      <tr>
       <td>作成日付</td>
       <td>{{ $product->created_at}}</td>
      </tr>
      <tr>
       <td>更新日付</td>
       <td>{{ $product->updated_at}}</td>
      </tr>
      <tr>
        <th>画像</th>
        <td>
          <img src="{{ asset('/storage/products/'. $product->image_name)}}" alt="アップロードした画像ファイル">
        </td>
      </tr>
    </table>
  </body>
</html>