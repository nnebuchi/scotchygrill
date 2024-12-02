<?php include_once 'components/navbar.php'; ?>
    <main class="">
      <section class="mx-auto w-full about-bg min-h-[600px]">
        <div
          class="tabletmd:w-7/12 sm:w-11/12 mobilemd:w-full mobilesm:w-10/12 w-11/12 mx-auto h-full flex items-center justify-center">
          <article
            class="flex flex-col mobilemd:gap-5 gap-3 items-center mt-32">
            <h1
              class="scotchy-heading-1 text-center mobilelg:w-full mobilemd:w-9/12">
            Where Flavour Meets 
              <span class="text-scotchy-yellow-500">Story </span>
             
            </h1>
            <p class="scotchy-body-1 text-center">
             Discover the passion, recipes, and behind-the-scenes secrets that make our dishes unforgettable.
            </p>
            <a href="#blog" class="mobilesm:mt-10 mt-5">
              <button
                class="cursor-pointer min-h-20 w-14 border-scotchy-yellow-500 py-2 rounded-full border-2">
                <div class="flex flex-col justify-center items-center gap-2">
                  <div
                    class="flex flex-col justify-center items-center gap-2 mt-2">
                    <span
                      class="bg-scotchy-yellow-500 w-1 rounded-full h-1"></span>
                    <span
                      class="bg-scotchy-yellow-500 w-1 rounded-full h-2"></span>
                    <span
                      class="bg-scotchy-yellow-500 w-1 rounded-full h-2"></span>
                    <span
                      class="bg-scotchy-yellow-500 w-1 rounded-full h-2"></span>
                  </div>
                </div>
                <span
                  class="fa fa-caret-down text-scotchy-yellow-500 text-2xl"></span>
              </button>
            </a>
          </article>
        </div>
      </section>

      <section class="mx-auto py-10" id="blog">
            <div class="flex flex-col gap-12 items-center justify-center w-full">
              <article class="text-center px-2 mx-auto">
                <h2 class="scotchy-ascent-heading">The Buzz</h2>
                <h1 class="scotchy-heading-2">Catch Up With Our Latest</h1>
              </article>
            </div>

            <div class="w-full mx-auto special-wrapper relative mt-10 pb-32 h-[600px]">
              <div
                class="swiper swiper3"
                data-aos="fade-up"
                data-aos-anchor-placement="top-center"
                data-aos-duration="1000"
                data-aos-once="true">
                <div class="swiper-wrapper  w-full" id="blog-slider">
                <?php

                  function getContentImage($cover_photo_id) {
                    $img_url = null;
                    $assetType = null;
                    try {
                      $curl = curl_init();
                      curl_setopt_array($curl, array(
                        CURLOPT_URL => 'https://cdn.contentful.com/spaces/xyx3qihk2z0u/assets/'. $cover_photo_id,
                        CURLOPT_RETURNTRANSFER => true,
                        CURLOPT_ENCODING => '',
                        CURLOPT_MAXREDIRS => 10,
                        CURLOPT_TIMEOUT => 0,
                        CURLOPT_FOLLOWLOCATION => true,
                        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                        CURLOPT_CUSTOMREQUEST => 'GET',
                        CURLOPT_HTTPHEADER => array(
                          'Authorization: Bearer P31txDdPNpo5Dd8Jsne8hzEaSa35lba4lUDQ3tjkzws'
                        ),
                      ));
      
                      $response = curl_exec($curl);
      
                      curl_close($curl);
                      $img_data = json_decode($response, true);
                        // dd($img_data);
                        
                        if(!empty($img_data['fields'])) {
                            $img_url = $img_data['fields']['file']["url"];
                            $assetType = $img_data['sys']['type']; 
                        }
                        return array('imageUrl' => $img_url, 'assetType' => $assetType);
                    } catch (\Exception $e) {
                        // Handle any exceptions (e.g., network errors, invalid responses)
                        return array('imageUrl' => $img_url, 'assetType' => $assetType);
                    }
                  }

                  $curl = curl_init();

                  curl_setopt_array($curl, array(
                    CURLOPT_URL => 'https://cdn.contentful.com/spaces/xyx3qihk2z0u/environments/Production/entries?content_type=scotchyGrillExternalArticle',
                    CURLOPT_RETURNTRANSFER => true,
                    CURLOPT_ENCODING => '',
                    CURLOPT_MAXREDIRS => 10,
                    CURLOPT_TIMEOUT => 0,
                    CURLOPT_FOLLOWLOCATION => true,
                    CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                    CURLOPT_CUSTOMREQUEST => 'GET',
                    CURLOPT_HTTPHEADER => array(
                      'Authorization: Bearer P31txDdPNpo5Dd8Jsne8hzEaSa35lba4lUDQ3tjkzws'
                    ),
                  ));

                  $response = curl_exec($curl);

                  curl_close($curl);
                  $response = json_decode($response);
                  // print_r($response->items[2]->fields);
                
                    
                  ?>
                  <?php foreach($response->items as $item): 
                    $dateObj = new DateTime($item->fields->articleDate); 
                    $formattedDate = $dateObj->format('M d, Y');
                  ?>

                      <?php 
                        if( property_exists($item->fields, 'thumbnailPhoto')){
                          $image_id =  $item->fields->thumbnailPhoto->sys->id;
                          $asset = getContentCoverImage($image_id);
                          $image = $asset['imageUrl'];
                        }else{
                          $image = "assets/images/scotchy-log.svg";
                        }
                      ?>
                        
                    
                      <div class="swiper-slide">
                        <div class="w-full h-[350px] mobilemd:flex-row flex-col flex items-center justify-center bg-[#fdefb2] p-4 ">
                          <div class="tabletlg:w-7/12 w-6/12 h-full  flex items-center justify-center">
                            <img
                              src="<?=$image?> "
                              alt=""
                              class="w-full h-full object-cover" />
                          </div>
                          <div class="flex items-center justify-center tabletlg:w-5/12 mobilemd:w-6/12 w-full h-full ">

                              <div
                                class="relative flex flex-col gap-8 items-center blog-details-main justify-center h-full">
                                <h3
                                  class="text-scotchy-black mmobilesm:text-xl text-center text-lg font-semibold">
                                  <?=$item->fields->title?>
                                </h3>
                                <div
                                  class="flex items-center justify-between laptopmd:gap-28 lg:gap-10 gap-10">
                                  <span
                                    class="tabletlg:text-base text-sm text-scotchy-black font-normal"
                                    ><?= $formattedDate?>
                                  </span>
                                  <img
                                    src="assets/images/donut-bg-brown.svg"
                                    class="w-12 rounded-full absolute right-3 z-0 top-9" />
    
                                  <a 
                                    href="<?=$item->fields->link?>" 
                                    target="_blank" 
                                    class="tabletlg:text-base text-sm z-10 underline text-red-500 font-semibold"
                                  >
                                    Read Article <i class="fa fa-arrow-right"></i>
                                  </a>
                                </div>
                              </div>
                          </div>
                        </div>
                      </div>
                  <?php endforeach; ?>
                </div>

                <div class="swiper-button-prev">
                  <span
                    class="fa fa-arrow-left text-white bg-scotchy-green-400 shadow-lg px-3 py-3 text-xl rounded-full hover:bg-white hover:ring-2 hover:ring-scotchy-green-400 hover:text-scotchy-green-400"></span>
                </div>
                <div class="swiper-button-next">
                  <span
                    class="fa fa-arrow-right text-white bg-scotchy-green-400 shadow-lg px-3 py-3 text-xl rounded-full hover:bg-white hover:ring-2 hover:ring-scotchy-green-400 hover:text-scotchy-green-400"></span>
                </div>
              </div>
              <!-- <div
                class="flex items-center mobilelg:justify-end justify-center w-full container mobilesm:px-20 mobilexs:px-20 px-10 mobilelg:mt-0 mt-7">
                <button
                  class="bg-transparent hover:bg-scotchy-yellow-400 transition-all group ease-in-out duration-300 rounded-xl text-start relative text-scotchy-green-400 lg:w-3/12 tabletlg:w-3/12 tabletmd:w-4/12 mobilemd:w-6/12 mobilesm:w-8/12 w-11/12 font-semibold px-4 h-12 border-2 border-scotchy-green-400">
                  <span
                    class="h-8 w-8 rounded-full bg-scotchy-yellow-400 group-hover:bg-scotchy-yellow-500 absolute right-5 bottom-2 z-0"></span>
                  See All Articles
                  <span
                    class="fa fa-long-arrow-right text-scotchy-green-400 text-2xl z-10 absolute right-9"></span>
                </button>
              </div> -->
            </div>
      </section>

      <section class="mx-auto py-10 bg-blog ">
        <div class="">
              <article class="text-start px-16 mb-10 mx-auto flex items-center justify-start gap-5 ">
                <h1 class="scotchy-heading-2 text-start">All Articles</h1>
                <div class="mobilemd:w-20 w-10"><img src="assets/images/arrow.png" alt=""></div>
              </article>

             <div class="swiper swiper4 ">
                <div class="swiper-wrapper w-full " id="blog-slider">
                  <?php
                    function getContentCoverImage($cover_photo_id) {
                      $img_url = null;
                      $assetType = null;
                      try {
                        $curl = curl_init();
                        curl_setopt_array($curl, array(
                          CURLOPT_URL => 'https://cdn.contentful.com/spaces/xyx3qihk2z0u/assets/'. $cover_photo_id,
                          CURLOPT_RETURNTRANSFER => true,
                          CURLOPT_ENCODING => '',
                          CURLOPT_MAXREDIRS => 10,
                          CURLOPT_TIMEOUT => 0,
                          CURLOPT_FOLLOWLOCATION => true,
                          CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                          CURLOPT_CUSTOMREQUEST => 'GET',
                          CURLOPT_HTTPHEADER => array(
                            'Authorization: Bearer P31txDdPNpo5Dd8Jsne8hzEaSa35lba4lUDQ3tjkzws'
                          ),
                        ));
        
                        $response = curl_exec($curl);
        
                        curl_close($curl);
                        $img_data = json_decode($response, true);
                          // dd($img_data);
                          
                          if(!empty($img_data['fields'])) {
                              $img_url = $img_data['fields']['file']["url"];
                              $assetType = $img_data['sys']['type']; 
                          }
                          return array('imageUrl' => $img_url, 'assetType' => $assetType);
                      } catch (\Exception $e) {
                          // Handle any exceptions (e.g., network errors, invalid responses)
                          return array('imageUrl' => $img_url, 'assetType' => $assetType);
                      }
                    }
                    $curl = curl_init();
                    curl_setopt_array($curl, array(
                      CURLOPT_URL => 'https://cdn.contentful.com/spaces/xyx3qihk2z0u/environments/Production/entries?content_type=scotchyGrillExternalArticle',
                      CURLOPT_RETURNTRANSFER => true,
                      CURLOPT_ENCODING => '',
                      CURLOPT_MAXREDIRS => 10,
                      CURLOPT_TIMEOUT => 0,
                      CURLOPT_FOLLOWLOCATION => true,
                      CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                      CURLOPT_CUSTOMREQUEST => 'GET',
                      CURLOPT_HTTPHEADER => array(
                        'Authorization: Bearer P31txDdPNpo5Dd8Jsne8hzEaSa35lba4lUDQ3tjkzws'
                      ),
                    ));
                    $response = curl_exec($curl);
                    curl_close($curl);
                    $response = json_decode($response);
                    // print_r($response->items[2]->fields);
                    ?>
                    <?php foreach($response->items as $item): 
                      $dateObj = new DateTime($item->fields->articleDate); 
                      $formattedDate = $dateObj->format('M d, Y');
                    ?>
                    <?php 
                      if( property_exists($item->fields, 'thumbnailPhoto')){
                        $image_id =  $item->fields->thumbnailPhoto->sys->id;
                        $asset = getContentCoverImage($image_id);
                        $image = $asset['imageUrl'];
                      }else{
                        $image = "assets/images/scotchy-log.svg";
                      }
                    ?>

                      <div class="swiper-slide ">
                        <div class="flex flex-col mb-10">
                          <div class="w-full h-full">
                            <div class="w-full">
                              <img
                                src="<?=$image?> "
                                alt=""
                                class="w-full h-72 object-cover" />
                            </div>
                            <div
                              class="relative flex flex-col gap-8 items-center blog-details justify-center">
                              <h3
                                class="text-scotchy-black mmobilesm:text-xl text-center text-lg font-semibold">
                                <?=$item->fields->title?>
                              </h3>
                              <div
                                class="flex items-center justify-between laptopmd:gap-28 lg:gap-10 gap-10">
                                <span
                                  class="tabletlg:text-base text-sm text-scotchy-black font-normal"
                                  ><?= $formattedDate?>
                                </span>
                                <img
                                  src="assets/images/donut-bg-brown.svg"
                                  class="w-12 rounded-full absolute right-3 z-0 top-9" />
    
                                <a 
                                  href="<?=$item->fields->link?>" 
                                  target="_blank" 
                                  class="tabletlg:text-base text-sm z-10 underline text-red-500 font-semibold"
                                >
                                  Read Article <i class="fa fa-arrow-right"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="flex flex-col">
                          <div class="w-full h-full">
                            <div class="w-full">
                              <img
                                src="<?=$image?> "
                                alt=""
                                class="w-full h-72 object-cover" />
                            </div>
                            <div
                              class="relative flex flex-col gap-8 items-center blog-details justify-center">
                              <h3
                                class="text-scotchy-black mmobilesm:text-xl text-center text-lg font-semibold">
                                <?=$item->fields->title?>
                              </h3>
                              <div
                                class="flex items-center justify-between laptopmd:gap-28 lg:gap-10 gap-10">
                                <span
                                  class="tabletlg:text-base text-sm text-scotchy-black font-normal"
                                  ><?= $formattedDate?>
                                </span>
                                <img
                                  src="assets/images/donut-bg-brown.svg"
                                  class="w-12 rounded-full absolute right-3 z-0 top-9" />
    
                                <a 
                                  href="<?=$item->fields->link?>" 
                                  target="_blank" 
                                  class="tabletlg:text-base text-sm z-10 underline text-red-500 font-semibold"
                                >
                                  Read Article <i class="fa fa-arrow-right"></i>
                                </a>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                  <?php endforeach; ?>
                </div>
                <div class="mb-10">

                    <div class="swiper-button-prev">
                      <span
                        class="fa fa-arrow-left text-white bg-scotchy-green-400 shadow-lg px-3 py-3 text-xl rounded-full hover:bg-white hover:ring-2 hover:ring-scotchy-green-400 hover:text-scotchy-green-400"></span>
                    </div>
                    <div class="swiper-pagination4  flex justify-center mt-10"></div>
                    <div class="swiper-button-next">
                      <span
                        class="fa fa-arrow-right text-white bg-scotchy-green-400 shadow-lg px-3 py-3 text-xl rounded-full hover:bg-white hover:ring-2 hover:ring-scotchy-green-400 hover:text-scotchy-green-400"></span>
                    </div>
                </div>
              </div>
                
        </div>
      </section>
    
    </main>

      <script>
    //  create a load event listener

      const CONTENTFUL_BASE_URL = "https://cdn.contentful.com";
      const CONTENTFUL_SPACE_ID = "xyx3qihk2z0u";
      const CONTENT_LIST_TOKEN = "P31txDdPNpo5Dd8Jsne8hzEaSa35lba4lUDQ3tjkzws";
      
     const myHeaders = new Headers();
      myHeaders.append("Authorization", `Bearer ${CONTENT_LIST_TOKEN}`);

      const requestOptions = {
        method: "GET",
        headers: myHeaders,
        redirect: "follow"
      };

      // document.addEventListener("DOMContentLoaded", () => {
        
      //   fetch(`${CONTENTFUL_BASE_URL}/spaces/${CONTENTFUL_SPACE_ID}/environments/Production/entries?content_type=scotchyGrillExternalArticle`, requestOptions)
      //     .then((response) => response.json())
      //     .then((data) => {
      //       let dom = ``;
      //       data.items.forEach((item) => { 
      //         dom += `<div class="swiper-slide">
      //             <div class="w-full h-full">
      //               <div class="w-full">
      //                 <img
      //                   src="assets/images/food-6.png"
      //                   alt=""
      //                   class="border-2 border-scotchy-black w-full h-72 object-cover" />
      //               </div>
      //               <div
      //                 class="relative flex flex-col gap-8 items-center blog-details justify-center">
      //                 <h3
      //                   class="text-scotchy-black mmobilesm:text-xl text-center text-lg font-semibold">
      //                   ${item.fields.title}
      //                 </h3>
      //                 <div
      //                   class="flex items-center justify-between laptopmd:gap-28 lg:gap-10 gap-10">
      //                   <span
      //                     class="tabletlg:text-base text-sm text-scotchy-black font-normal"
      //                     >Aug 14,2024
      //                   </span>
      //                   <img
      //                     src="assets/images/donut-bg-brown.svg"
      //                     class="w-12 rounded-full absolute right-3 z-0 top-9" />

      //                   <a
      //                     href="${item.fields.link}"
      //                     class="tabletlg:text-base text-sm z-10 underline text-red-500 font-semibold">
      //                     Read Article <i class="fa fa-arrow-right"></i>
      //                   </a>
      //                 </div>
      //               </div>
      //             </div>
      //           </div>` ;
              
      //       })
      //       // console.log(dom);
      //       // console.log(document.querySelector("#blog-slider").innerHTML);
            
      //       // document.querySelector("#blog-slider").innerHTML = dom
            
      //     })
      //     .catch((error) => console.log("error", error));
      // })

  
    </script>
<?php include_once 'components/footer.php'; ?>
