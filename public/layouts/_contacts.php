<?php
require "../app/Models/contacts/contact.php";

?>

<section id="contacts" name="main"class="contacts">

  <div class="container contacts_wrapper wrapper">

    <div class="header1">
      <span class="header1_name services_header">Контакты</span>
      <hr class="header_hr services_header-hr">
    </div>

    <div class="row">

      <div class="contacts_block container contacts_block-1 col-md-4 col-12">

        <!-- <div class="container"> -->
          <form class="row form-group contact_us contact-form" action="<?= $_SERVER['PHP_SELF'] ?>" method="post">

            <div class="username contacts_div_input contacts_input-small form-control">
              <input type="text" id="name" value="<?= isset($_POST['visitor_name']) ? $visitor_name : '';?>" name="visitor_name" placeholder="Ваше Имя" required class="contacts_input col-12 username">
            </div>

            <div class="email contacts_div_input contacts_input-small form-control">
              <input type="email" id="email" value="<?= isset($_POST['visitor_email']) ? $visitor_email : '';?>" name="visitor_email" placeholder="VashEmail@gmail.com" class="contacts_input col-12 email">
            </div>

            <div class="telephone contacts_div_input contacts_input-small form-control">
              <select class="contacts_input" id="department-selection" value="<?= isset($_POST['concerned_department']) ? $concerned_department : '';?>"name="concerned_department" required>
                  <option value="">Выберите департамент</option>
                  <option value="billing">Billing</option>
                  <option value="marketing">Marketing</option>
                  <option value="technical support">Technical Support</option>
              </select>

              <!-- <input type="tel" value="телефон" class="contacts_input contacts_input-small col-12 telephone"> -->
            </div>
            <div class="message contacts_div_input contacts_input-big form-control">
              <!-- <label for="message">Write your message</label> -->
              <textarea class="contacts_input" id="message" name="visitor_message" placeholder="Say whatever you want." required><?= isset($_POST['visitor_message']) ? $visitor_message : '';?></textarea>
            </div>
            <!-- <input type="text" value="sfdvdfv" class="contacts_input contacts_input-big col-12 contacts"> -->
            <div class="actions row w-100">

              <button class="button callto_action col-6" type="submit" name="submit">Отправить</button>
              <!-- <input  type="button" size="30" type="submit" value="Отправить"> -->

              <div class="social-nets fb col-2">
                <svg class="social_media" width="40" height="40" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M7.90678 15.978H11.1952V29.5161C11.1952 29.7834 11.4118 30 11.6791 30H17.2548C17.5221 30 17.7387 29.7834 17.7387 29.5161V16.0418H21.5191C21.7649 16.0418 21.9717 15.8573 21.9998 15.6132L22.574 10.6291C22.5897 10.492 22.5463 10.3547 22.4546 10.2518C22.3627 10.1488 22.2313 10.0899 22.0934 10.0899H17.7389V6.96562C17.7389 6.02385 18.246 5.54625 19.2463 5.54625C19.3889 5.54625 22.0934 5.54625 22.0934 5.54625C22.3607 5.54625 22.5772 5.32957 22.5772 5.06238V0.487441C22.5772 0.220137 22.3607 0.00357422 22.0934 0.00357422H18.1696C18.142 0.00222656 18.0805 0 17.9899 0C17.3091 0 14.9427 0.133652 13.0734 1.85332C11.0022 3.75902 11.2902 6.04072 11.3589 6.43635V10.0898H7.90672C7.63941 10.0898 7.42285 10.3063 7.42285 10.5737V15.4941C7.42291 15.7613 7.63947 15.978 7.90678 15.978Z" fill="#385C8E"/>
                </svg>
              </div>

              <div class="social-nets vk col-2">
                <svg class="social_media" width="40" height="40" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <g clip-path="url(#clip1)">
                    <path d="M25.8193 17.3062C26.8144 18.2778 27.8647 19.1919 28.7573 20.2614C29.1516 20.7367 29.5248 21.2272 29.8104 21.7788C30.215 22.5629 29.8485 23.4257 29.1455 23.4725L24.775 23.4705C23.6477 23.5641 22.7485 23.1103 21.9924 22.3396C21.3873 21.7232 20.8269 21.0673 20.2451 20.4301C20.0065 20.1697 19.7569 19.9247 19.4586 19.731C18.862 19.3437 18.3441 19.4623 18.0032 20.0845C17.6559 20.7175 17.5771 21.4182 17.543 22.1236C17.4962 23.1527 17.1851 23.4233 16.1514 23.4704C13.9421 23.5746 11.8454 23.2404 9.89753 22.1259C8.18026 21.1434 6.84866 19.7563 5.68956 18.186C3.43294 15.1284 1.70472 11.7686 0.151512 8.31457C-0.198116 7.53639 0.0575866 7.11867 0.916219 7.10385C2.34198 7.07613 3.76757 7.07813 5.19503 7.10186C5.77452 7.11035 6.15813 7.4427 6.3819 7.99014C7.15329 9.88688 8.09718 11.6914 9.28194 13.3641C9.59747 13.8094 9.91921 14.2548 10.3773 14.5682C10.8841 14.9153 11.27 14.8003 11.5084 14.2356C11.6597 13.8776 11.726 13.492 11.7601 13.1087C11.8731 11.7895 11.888 10.4726 11.6899 9.15814C11.5682 8.33777 11.1061 7.80668 10.2875 7.65147C9.86981 7.57231 9.93198 7.41686 10.1342 7.17844C10.4855 6.76723 10.8159 6.51123 11.4746 6.51123H16.4139C17.1915 6.66469 17.3642 7.01402 17.4707 7.79643L17.4749 13.283C17.4664 13.5858 17.6262 14.4847 18.1717 14.6852C18.6084 14.8279 18.8962 14.4786 19.1582 14.2017C20.3408 12.9466 21.1849 11.4632 21.9389 9.92725C22.2735 9.25184 22.5613 8.55047 22.8401 7.84963C23.0467 7.32961 23.3709 7.07373 23.9567 7.08504L28.7105 7.08926C28.8515 7.08926 28.9941 7.09131 29.1306 7.11469C29.9317 7.25121 30.1512 7.5958 29.9038 8.37803C29.514 9.60527 28.7555 10.628 28.0138 11.6555C27.2211 12.7524 26.3732 13.8118 25.587 14.9153C24.8647 15.9231 24.922 16.431 25.8193 17.3062Z" fill="#436EAB"/>
                  </g>
                    <defs>
                      <clipPath id="clip0">
                        <rect width="30" height="30" fill="white"/>
                      </clipPath>
                    </defs>
                </svg>
              </div>

              <div class="social-nets instagram col-2">
                <svg class="social_media" width="40" height="40" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M21.0628 0H8.93716C4.00919 0 0 4.00919 0 8.93716V21.0628C0 25.9908 4.00919 30 8.93716 30H21.0628C25.9908 30 30 25.9908 30 21.0628V8.93716C29.9999 4.00919 25.9908 0 21.0628 0ZM26.982 21.0628C26.982 24.3319 24.3319 26.982 21.0628 26.982H8.93716C5.66813 26.982 3.018 24.3319 3.018 21.0628V8.93716C3.018 5.66807 5.66813 3.018 8.93716 3.018H21.0628C24.3319 3.018 26.982 5.66807 26.982 8.93716V21.0628Z" fill="url(#paint0_linear)"/>
                    <path d="M14.9998 7.24072C10.7214 7.24072 7.24072 10.7214 7.24072 14.9997C7.24072 19.278 10.7214 22.7588 14.9998 22.7588C19.2781 22.7588 22.7589 19.2781 22.7589 14.9997C22.7589 10.7214 19.2781 7.24072 14.9998 7.24072ZM14.9998 19.7409C12.3813 19.7409 10.2587 17.6182 10.2587 14.9998C10.2587 12.3813 12.3814 10.2587 14.9998 10.2587C17.6182 10.2587 19.7409 12.3813 19.7409 14.9998C19.7409 17.6182 17.6182 19.7409 14.9998 19.7409Z" fill="url(#paint1_linear)"/>
                    <path d="M22.7738 9.15841C23.8006 9.15841 24.633 8.326 24.633 7.29917C24.633 6.27235 23.8006 5.43994 22.7738 5.43994C21.747 5.43994 20.9146 6.27235 20.9146 7.29917C20.9146 8.326 21.747 9.15841 22.7738 9.15841Z" fill="url(#paint2_linear)"/>
                  <defs>
                    <linearGradient id="paint0_linear" x1="15" y1="29.9127" x2="15" y2="0.233015" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#E09B3D"/>
                      <stop offset="0.3" stop-color="#C74C4D"/>
                      <stop offset="0.6" stop-color="#C21975"/>
                      <stop offset="1" stop-color="#7024C4"/>
                    </linearGradient>
                    <linearGradient id="paint1_linear" x1="14.9998" y1="29.9125" x2="14.9998" y2="0.232807" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#E09B3D"/>
                      <stop offset="0.3" stop-color="#C74C4D"/>
                      <stop offset="0.6" stop-color="#C21975"/>
                      <stop offset="1" stop-color="#7024C4"/>
                    </linearGradient>
                    <linearGradient id="paint2_linear" x1="22.7738" y1="29.9127" x2="22.7738" y2="0.233005" gradientUnits="userSpaceOnUse">
                      <stop stop-color="#E09B3D"/>
                      <stop offset="0.3" stop-color="#C74C4D"/>
                      <stop offset="0.6" stop-color="#C21975"/>
                      <stop offset="1" stop-color="#7024C4"/>
                    </linearGradient>
                  </defs>
                </svg>
              </div>

            </div>
          </form>
        <!-- </div> -->



      </div>

      <div class="contacts_block contacts_block-2 contacts_plate col-md-8 col-12 container">

        <div class="row article article_1">
          <div class="col-2 col-md-1 contact_icon _icon">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M11.9824 26.93V29.9684L11.2477 29.3749C11.1342 29.2831 8.43315 27.0902 5.69412 23.9456C1.91574 19.6076 0 15.7137 0 12.3722V12.041C0 5.43388 5.37529 0.0585938 11.9824 0.0585938C18.5896 0.0585938 23.9648 5.43388 23.9648 12.041V12.3722C23.9648 12.6528 23.95 12.9378 23.923 13.2262L21.5797 11.0884C21.0997 6.21597 16.9789 2.39662 11.9824 2.39662C6.66458 2.39662 2.33803 6.72318 2.33803 12.041V12.3722C2.33803 18.0187 9.61327 24.8543 11.9824 26.93ZM19.1718 25.2507H22.6788V21.7438H19.1718V25.2507ZM11.9824 7.07268C14.7219 7.07268 16.9508 9.30153 16.9508 12.041C16.9508 14.7805 14.7219 17.0094 11.9824 17.0094C9.24294 17.0094 7.01408 14.7805 7.01408 12.041C7.01408 9.30153 9.24294 7.07268 11.9824 7.07268ZM11.9824 9.41071C10.532 9.41071 9.35211 10.5906 9.35211 12.041C9.35211 13.4912 10.532 14.6713 11.9824 14.6713C13.4326 14.6713 14.6127 13.4912 14.6127 12.041C14.6127 10.5906 13.4326 9.41071 11.9824 9.41071ZM28.4244 23.662L27.767 23.0624V26.8158C27.767 28.5635 26.345 29.9854 24.5972 29.9854H17.195C15.4472 29.9854 14.0252 28.5635 14.0252 26.8158V23.0624L13.3678 23.662L11.7922 21.9349L20.896 13.6295L30 21.9349L28.4244 23.662ZM25.429 20.9294L20.896 16.7942L16.3632 20.9294V26.8156C16.3632 27.2742 16.7363 27.6473 17.195 27.6473H24.5972C25.0559 27.6473 25.429 27.2742 25.429 26.8156V20.9294Z" fill="black"/>
            </svg>
          </div>
          <div class="col-8 content_text">г. Москва, ул. 2-ая Звенигородская, дом 13, стр.15 «Культурно деловой центр на Красной Пресне»</div>
        </div>

        <div class="row article article_2">
          <div class="col-2 col-md-1 contact_icon _icon">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <g clip-path="url(#clip1)">
                <path d="M29.4171 23.8548L26.0913 21.6374L23.1348 19.6668C22.5642 19.2871 21.7974 19.4116 21.3761 19.9523L19.5467 22.3042C19.1537 22.8145 18.4468 22.9612 17.8832 22.6492C16.6419 21.9586 15.174 21.3085 11.935 18.0654C8.69614 14.8224 8.04183 13.3586 7.35131 12.1172C7.0393 11.5537 7.18596 10.8468 7.69631 10.4538L10.0482 8.62437C10.5888 8.20321 10.7133 7.4364 10.3337 6.86576L8.42356 4.00027L6.14564 0.583354C5.75793 0.00175901 4.98181 -0.172848 4.3824 0.18662L1.75532 1.76266C1.04535 2.18095 0.523461 2.85641 0.297761 3.649C-0.420649 6.26829 -0.565491 12.0463 8.69456 21.3064C17.9546 30.5664 23.7321 30.4211 26.3514 29.7026C27.144 29.477 27.8195 28.9551 28.2377 28.2451L29.8138 25.6181C30.1733 25.0186 29.9987 24.2425 29.4171 23.8548Z" fill="black"/>
                <path d="M17.069 4.65409C21.9229 4.65948 25.8566 8.59307 25.862 13.4471C25.862 13.7327 26.0935 13.9644 26.3792 13.9644C26.6649 13.9644 26.8965 13.7328 26.8965 13.4471C26.8905 8.02202 22.4941 3.62561 17.069 3.61963C16.7834 3.61963 16.5518 3.85119 16.5518 4.13689C16.5517 4.42247 16.7833 4.65409 17.069 4.65409Z" fill="black"/>
                <path d="M17.0685 7.75815C20.2093 7.76184 22.7544 10.307 22.7581 13.4477C22.7581 13.7334 22.9897 13.965 23.2754 13.965C23.561 13.965 23.7926 13.7334 23.7926 13.4477C23.7883 9.7359 20.7804 6.72791 17.0685 6.72363C16.7829 6.72363 16.5513 6.95519 16.5513 7.24089C16.5513 7.52659 16.7828 7.75815 17.0685 7.75815Z" fill="black"/>
                <path d="M17.069 10.8618C18.4966 10.8635 19.6534 12.0201 19.6551 13.4473C19.6551 13.7329 19.8867 13.9644 20.1724 13.9644C20.458 13.9644 20.6897 13.7329 20.6897 13.4473C20.6874 11.4492 19.0677 9.82992 17.069 9.82764C16.7834 9.82764 16.5518 10.0591 16.5518 10.3448C16.5517 10.6303 16.7833 10.8618 17.069 10.8618Z" fill="black"/>
              </g>
              <defs>
                <clipPath id="clip0">
                  <rect width="30" height="30" fill="white"/>
                </clipPath>
              </defs>
            </svg>
          </div>
          <div class="col-8 content_text">+7 (495) 984-90-17 <br> +7 (495) 984-90-31</div>
        </div>

        <div class="row article article_3">

          <div class="col-2 col-md-1 contact_icon _icon">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M26.4393 3.60742H3.56074C1.59736 3.60742 0 5.14143 0 7.02692V22.9736C0 24.8591 1.59736 26.3931 3.56074 26.3931H26.4393C28.4027 26.3931 30 24.8591 30 22.9736V7.02692C30 5.14143 28.4027 3.60742 26.4393 3.60742ZM26.4393 23.3743H3.56074C3.27214 23.3743 3.01902 23.1871 3.01902 22.9736V9.13562L13.3664 17.8714C13.5785 18.0506 13.8483 18.1492 14.1261 18.1492L15.8736 18.1493C16.1512 18.1493 16.4212 18.0506 16.6334 17.8714L26.9812 9.13531V22.9738C26.9811 23.1871 26.7279 23.3743 26.4393 23.3743ZM15 15.1517L4.93592 6.62629H25.0642L15 15.1517Z" fill="black"/>
            </svg>
          </div>
          <div class="col-8 content_text">info@cpi-group.ru</div>

        </div>

        <div class="row article article_4">

          <div class="col-2 col-md-1 contact_icon _icon">
            <svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M15 0C6.729 0 0 6.729 0 15C0 23.271 6.729 30 15 30C23.271 30 30 23.271 30 15C30 6.729 23.271 0 15 0ZM15 26.8083C8.48899 26.8083 3.19144 21.5113 3.19144 15C3.19144 8.48868 8.48899 3.19175 15 3.19175C21.511 3.19175 26.8086 8.48868 26.8086 15C26.8086 21.5113 21.511 26.8083 15 26.8083Z" fill="black"/>
              <path d="M22.8176 14.5366H16.0766V6.43137C16.0766 5.74929 15.5236 5.19629 14.8415 5.19629C14.1595 5.19629 13.6064 5.74929 13.6064 6.43137V15.7716C13.6064 16.4537 14.1595 17.0067 14.8415 17.0067H22.8176C23.4997 17.0067 24.0527 16.4537 24.0527 15.7716C24.0527 15.0896 23.4997 14.5366 22.8176 14.5366Z" fill="black"/>
            </svg>
          </div>
          <div class="col-8 content_text">Понедельник — Суббота <br> с 10:00 до 20:00 без перерыва.</div>

        </div>

      </div>
    </div>
  </div>
</section>

<?php if($msg != '') : ?>
</div style="height: 100px;"class="alert bg-green <?= $msgClass; ?>"><?= $msg; ?><div>
<?php  endif; ?>
