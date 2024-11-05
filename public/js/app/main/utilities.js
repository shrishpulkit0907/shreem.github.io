function generateCompanyLink(companyName, companyId) {
    return '<a href="/companies/' + companyId + '">' + companyName + '</a>';
}

function formatPhoneNumber(phoneno) {
    return phoneno.substring(0, phoneno.length - 4).replace(/./g, "*") + phoneno.substring(phoneno.length - 4);
}

function formatEmail(email) {
    return email.substring(0, 4) + email.substring(4, email.indexOf("@")).replace(/./g, "*") + email.substring(email.indexOf("@"));
}

function formatCountry(country) {
    if (typeof country === 'object' && country !== null) {
        return `<img src='images/flags/24x24/${country.iso2}.png' alt='${country.name}' class='rounded-circle'> ${country.name}`;
    } else { return '-' }
}
function formatMembership(membership) {
    var bgClass = membership === 'Elite' ? 'bg-label-info' :
        membership === 'Pro' ? 'bg-label-warning' :
            'bg-label-primary';
    return `<span class="badge ${bgClass} me-1">${membership}</span>`;
}
function formatActivatedate(activatedate) {
    var activateDate = new Date(activatedate);

    return `<span class="badge bg-label-primary me-1">${activateDate.getDate() + "-" + activateDate.getMonth() + "-" + activateDate.getFullYear()}</span>`;
}
function formatMembersince(activatedate) {
    var activationDate = new Date(activatedate);
    if (isNaN(activationDate)) {
        return '-';
    }
    var daysPassed = Math.round((Date.now() - activationDate.getTime()) / (1000 * 60 * 60 * 24));
    return `<span class="badge bg-label-primary me-1">${daysPassed} Days Passed</span>`;
}
function formatExpirydate(expirydate) {
    var expiryDate = new Date(expirydate);

    return `<span class="badge bg-label-primary me-1">${expiryDate.getDate() + "-" + expiryDate.getMonth() + "-" + expiryDate.getFullYear()}</span>`;
}

function formatExpirytill(expirydate) {
    var expiryDate = new Date(expirydate);
    if (isNaN(expiryDate)) {
        return '-';
    }
    var daysPassed = Math.round((expiryDate.getTime() - Date.now()) / (1000 * 60 * 60 * 24));
    return `<span class="badge bg-label-primary me-1">${daysPassed} Days Left Till Expiry</span>`;
}
function formatProduct(products) {
    return products.map((product, index) => {
        return `<span class="badge bg-label-primary me-1">${product.product_name}</span>`;
    });
}
function formatMembershipStatus(status) {
    var statusList = {
        0: { text: 'Inactive', class: 'bg-label-warning' },
        1: { text: 'Active', class: 'bg-label-success' }
    };
    if (status != undefined || status != null) {
        return `<span class="badge ${statusList[status].class} me-1">${statusList[status].text}</span>`;
    }
}
function formatActions(id) {
    return `<div class="dropdown">
    <button type="button" class="btn p-0 dropdown-toggle hide-arrow"
        data-bs-toggle="dropdown">
        <i class="bx bx-dots-vertical-rounded"></i>
    </button>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="/transaction/edit/${id}"><i
                class="bx bx-edit me-1"></i> Edit</a>
        <a class="dropdown-item"
            href="/transaction/view/${id}"><i
                class="bx bx-edit me-1"></i> View</a>
                </div>
</div>`;
}
function formatMemberflag(){
    return ``;
}
export default {
    generateCompanyLink,
    formatPhoneNumber,
    formatEmail,
    formatCountry,
    formatMembership,
    formatActivatedate,
    formatMembersince,
    formatExpirydate,
    formatExpirytill,
    formatProduct,
    formatMembershipStatus,
    formatActions,
    // formatMemberflag,
    // Other utility functions...
};
