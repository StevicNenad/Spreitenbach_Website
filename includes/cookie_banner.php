<?php if (!isset($_COOKIE["cookies"])) : ?>
  <div id="cookie_banner" class="cookie-consent-banner">
    <div class="cookie-consent-banner__inner">
      <div class="cookie-consent-banner__copy">
        <div class="cookie-consent-banner__header">DIESE WEBSEITE BENUTZT COOKIES</div>
        <div class="cookie-consent-banner__description">Wir verwenden Cookies, um Inhalte und Werbung zu personalisieren, um Funktionen für soziale Medien bereitzustellen und um unseren Datenverkehr zu analysieren. Wir geben auch Informationen über Ihre Nutzung unserer Website an unsere Partner für soziale Medien, Werbung und Analysen weiter, die diese mit anderen Informationen, die Sie zur Verfügung gestellt haben oder die sie aus Ihrer Nutzung unserer Dienste gesammelt haben, kombinieren können. Sie stimmen unseren Cookies zu, wenn Sie unsere Website weiter nutzen.</div>
      </div>

      <div class="cookie-consent-banner__actions">
        <a id="agree_button" href="#!" class="cookie-consent-banner__cta">
          OK, einverstanden
        </a>

        <a href="privacy.php" class="cookie-consent-banner__cta cookie-consent-banner__cta--secondary">
          Datenschutzrichtlinien
        </a>
      </div>
    </div>
  </div>
<?php endif; ?>