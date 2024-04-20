<template>
  <div class="d-flex align-self-center iq-unread-inner" @click="openDetail(items)">
    <div class="iq-email-sender-info">
      <div class="iq-checkbox-mail">
        <div class="form-check">
          <input type="checkbox" class="form-check-input" :id="'index-'+items.title">
          <label class="form-check-label" :for="'index-'+items.title" />
        </div>
      </div>
      <span class="ri-star-line iq-star-toggle" :class="items.favorite ? 'text-warning' : ''" />
      <a href="javascript: void(0);" class="iq-email-title">{{ items.title }}</a>
    </div>
    <div class="iq-email-content">
      <a href="javascript: void(0);" class="iq-email-subject">{{ items.subject }} &nbsp;–&nbsp;
        <span>@Mackenzieniko - Very cool :) Nicklas, You have a new direct message.</span>
      </a>
      <div class="iq-email-date">{{ items.emailTime }}</div>
    </div>
    <ul class="iq-social-media list-inline">
        <li><a href="#" class="material-symbols-outlined">delete_forever</a></li>
        <li><a href="#" class="material-symbols-outlined">mail_outline</a></li>
        <li><a href="#" class="material-symbols-outlined">article</a></li>
        <li><a href="#" class="material-symbols-outlined">watch_later</a></li>
    </ul>
  </div>
</template>

<script>
export default {
  name: 'EmailItem',
  props: ['items'],
  methods: {
    openDetail (items) {
      this.$emit('update', items)
    }
  }
}
</script>
