# Apache Web Server Administration - start

Starting repo for an Apache Web Server administration exercise.

It contains a Docker container with three PHP8 websites and a basic Apache Web Server installation.

The exercise consists in: 

1. Configuring a custom error page (`/errors/404.html`)

2. Configuring the three websites as virtual hosts:

    | Hostname | Website |
    |:---|:---|
    | `shop.local` | Shop |
    | `blog.local` | Technology blog |
    | `intranet.local` | Company intranet |

3. Protecting the online shop  
    - Access to the shop's `/config/` directory must be denied
    - Directory listings for the `/uploads/` directory must be denied

4. HTTP basic authentication  
    The intranet's `/admin/` directory must be password-protected.

5. Configuring URL rewriting  
    The blog must behave as follows:
    - `/articles` must rewrite to `articles.php`
    - `/articles/42` must rewrite to `article.php?id=42`
    - `/old-blog` must redirect permanently to `/articles`

## Start

```bash
docker compose up -d --build
```

The web server should be available at `http://localhost:8080/`.

## Apache configuration

- `apache/apache2.conf`: main server configuration, including a shared 404 page.
- `apache/vhosts.conf`: customer virtual hosts and directory-level permissions.
- `sites/*/.htaccess`: directory-specific directives.

After modifying Apache's main configuration or virtual hosts, validate and reload:

```bash
docker compose exec apache apachectl -t
docker compose exec apache apachectl -k graceful
```

Changes to `.htaccess` files are normally read on each request.

## Tools
Apache 2.4 / PHP8 / Water.css / HTML5

## Author
ChatGPT 5.6-Sol, prompted by Arturo Mora-Rioja