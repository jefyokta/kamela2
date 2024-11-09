const updateHouseStatus = (id, status) => {
  if (document.getElementById(id)) {
    const el = document.getElementById(id);
    Array.from(el.classList).forEach((cls) => {
      if (cls.startsWith("status")) {
        el.classList.remove(cls);
      }
    });
    el.classList.add("status" + status);

    setPopOver({ id, status });
  }
};

const setPopOver = ({ id, status }) => {
  const statusElement = document.getElementById("status-" + id);
  const dropdownElement = document.getElementById("booking-" + id);

  let statusText = "";
  switch (status) {
    case 200:
      statusText = "Tersedia";
      statusElement.innerHTML = `<span class="bg-green-500/50 text-green-100 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">${statusText}</span>`;
      break;
    case 300:
      statusText = "Dibooking";
      statusElement.innerHTML = `<span class="bg-blue-500 text-blue-100 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-blue-900 dark:text-blue-300">${statusText}</span>`;
      break;
    case 400:
      statusText = "Terjual";
      statusElement.innerHTML = `<span class="bg-red-500 text-red-100 text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-red-900 dark:text-red-300">${statusText}</span>`;
      break;
    default:
      statusText = "Tersedia";
      statusElement.innerHTML = `<span class="bg-green-500/50 text-white text-xs font-medium me-2 px-2.5 py-0.5 rounded dark:bg-green-900 dark:text-green-300">${statusText}</span>`;
      break;
  }

  if (status < 300) {
    dropdownElement.style.visibility = "visible";
  } else {
    dropdownElement.style.visibility = "hidden";
  }
};

const ws = new WebSocket("wss://kamela-permai.oktaa:8000/notification");

ws.onmessage = (event) => {
  const message = JSON.parse(event.data);
  if (message?.event === "houseUpdate") {
    updateHouseStatus(message.house.id, message.house.status);
  } else {
    const body = document.querySelector("body");
    const toastId = `toast-${Date.now()}`;
    const node = `
        <div id="${toastId}" class="w-full max-w-xs p-4 fixed bottom-5 right-5 text-gray-500 bg-white rounded-lg shadow dark:bg-gray-800 dark:text-gray-400" role="alert" style="z-index:99999999999">
        <div class="flex">
    
                <div class="ms-3 text-sm font-normal">
                    <span class="mb-1 text-sm font-semibold text-gray-900 dark:text-white">Pengguna</span>
                    <div class="mb-2 text-sm font-normal">${message.message}</div>
                    <a href="/admin/tamu" class="inline-flex px-2.5 py-1.5 text-xs font-medium text-center text-white bg-blue-600 rounded-lg hover:bg-blue-700 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-500 dark:hover:bg-blue-600 dark:focus:ring-blue-800">Lihat</a>   
                </div>
                <button type="button" onclick="document.getElementById('${toastId}').remove()" class="ms-auto -mx-1.5 -my-1.5 bg-white justify-center items-center flex-shrink-0 text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#${toastId}" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 1l6 6m0 0l6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
        </div>
        `;

    body.insertAdjacentHTML("beforeend", node);

    setTimeout(() => {
      const toastElement = document.getElementById(toastId);
      if (toastElement) {
        toastElement.remove();
      }
    }, 5000);
  }
};
