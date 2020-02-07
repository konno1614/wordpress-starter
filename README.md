# wordpress_starter

## local

http://localhost

**wordpress**

- url : http://localhost/wp-admin
- name : starter
- password : passw0rd
- email : starter@example.com


### フロント開発

```sh
cd wordpress/wp-content/themes/starter/assets-src
# npm install # or yarn
npm start # or yarn start
npm run build # or yarn build
```

`wordpress/wp-content/themes/starter/assets-src`  
↓ 出力先  
`wordpress/wp-content/themes/starter/assets`

#### scss

```sh
`url()`で画像を指定する場合は、`wordpress/wp-content/themes/starter/assets-src/scss/style.scss`からの相対パス
scss、jsで利用しない画像は`wordpress/wp-content/themes/starter/img`
```
