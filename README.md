# stolenegg.github.io

*stolenegg.com* public web site

Built for [Jekyll / GitHub Pages](https://help.github.com/en/github/working-with-github-pages/about-github-pages-and-jekyll)

### Local development

#### Build site with Jekyll
```
export JEKYLL_VERSION=3.8
docker run --rm \
  --volume="$PWD:/srv/jekyll" \
  -it jekyll/builder:$JEKYLL_VERSION \
  jekyll build --watch
```

#### Run server locally
```
cd _site
python3 -m http.server 1234
```