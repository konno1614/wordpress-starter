import $ from 'jquery'

$(function () {
  $('.js-more-button').on('click', function (e) {
    e.preventDefault()
    const $this = $(this)
    $this.attr('disabled', 'disabled')
    const post_type = $this.data('type') || ''
    const targetClass = $this.data('target') || 'js-card-wrapper'
    const page = Number($this.data('page')) || 2

    $.ajax({
      type: 'POST',
      url: theme_ajax.url,
      data: {
        action: 'get_card_view',
        post_type,
        page
      },
      timeout: 10000
    })
      .done((data, status, xhr) => {
        if (data) {
          $(`.${targetClass}`).append(data)
          const max = xhr.getResponseHeader('x_max_num_pages')
          if (page >= Number(max)) {
            $this.closest('.js-button-wrapper').remove()
          } else {
            $this.data('page', page + 1)
          }
        }
      })
      .fail((jqXHR, textStatus, errorThrown) => {
        console.error(errorThrown, textStatus, jqXHR)
      })
      .always(() => {
        $this.removeAttr('disabled')
      })
  })

  $('.js-course-more-button').on('click', function (e) {
    e.preventDefault()
    const $this = $(this)
    $this.attr('disabled', 'disabled')
    const term = $this.data('term') || ''
    const page = $this.data('page') || 2
    const targetClass = $this.data('target') || 'js-card-wrapper'

    $.ajax({
      type: 'POST',
      url: theme_ajax.url,
      data: {
        action: 'get_course_card_view',
        term,
        page
      },
      timeout: 10000
    })
      .done((data, status, xhr) => {
        if (data) {
          $(`.${targetClass}`).append(data)
          const max = xhr.getResponseHeader('x_max_num_pages')
          if (page >= Number(max)) {
            $this.closest('.js-button-wrapper').remove()
          } else {
            $this.data('page', page + 1)
          }
        }
      })
      .fail((jqXHR, textStatus, errorThrown) => {
        console.error(errorThrown, textStatus, jqXHR)
      })
      .always(() => {
        $this.removeAttr('disabled')
      })
  })
})
