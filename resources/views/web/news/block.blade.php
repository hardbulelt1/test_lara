<div class="col-md-4 col-sm-4 col-xs-12">
    <div class="wp-block inverse no-margin">
        <div class="figure">
            <img src="https://all-psd.ru/uploads/posts/2011-05/psd-news-icon.jpg">
            <div class="wp-block-info-over left">
                <h2>
              <span class="pull-left">
              <a href="/news/{{ $news->id }}">{{ $news->title  }}</a>
              </span>
                </h2>
            </div>
        </div>
        <p>
            {{ strip_tags(substr($news->body,0,100))  }}
        </p>
    </div>
</div>
