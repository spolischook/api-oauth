### OAuth test

#### Setup

Copy `.env` file into `.env.local`  
Put applications credentials in `env.local`, see [hwi/oauth-bundle section](./.env#L37)

Install dependencies and start server on `localhost:8001`
or any other domain that is used in redirect url setting.

```bash
composer install
bin/console server:start localhost:8001
```
